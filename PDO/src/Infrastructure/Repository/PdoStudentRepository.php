<?php


namespace Alura\Pdo\Infrastructure\Repository;


use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        $sqlString = 'SELECT * FROM students;';
        $statement = $this->connection->query($sqlString);
        $statement->execute();
        return $this->hidrateStudentsList($statement);
    }

    public function studentsBirthDayAt(\DateTimeInterface $birthDate): array
    {
        $sqlString = "SELECT * FROM students WHERE birth_date = :birth_date;";
        $statement  = $this->connection->query($sqlString);
        $statement->bindValue(":birth_date", $birthDate->format('Y-m-d'));
        $statement->execute();
        return $this->hidrateStudentsList($statement);
    }

    private function hidrateStudentsList(\PDOStatement $statement): array
    {
        $studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date'])
            );
        }

        return $studentList;
    }

    public function save(Student $student): bool
    {
        if($student->id() === null) {
            return $this->insert($student);
        }
        return $this->update($student);
    }

    public function insert(Student $student): bool
    {
        $sqlString = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
        $statement = $this->connection->prepare($sqlString);
        $success = $statement->execute([
            ':name' => $student->name(),
            ':birth_date' => $student->birthDate()->format('Y-m-d')
        ]);
        if($success) {
            $student->defineId($this->connection->lastInsertId());
        }
        return $success;
    }

    public function update(Student $student): bool
    {
        $updateQuery = 'UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id;';
        $stmt = $this->connection->prepare($updateQuery);
        $stmt->bindValue(':name', $student->name());
        $stmt->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
        $stmt->bindValue(':id', $student->id(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function remove(Student $student): bool
    {
        $statement = $this->connection->prepare('DELETE FROM students WHERE id = :id;');
        $statement->bindValue(':id', $student->id(), PDO::PARAM_INT);
        return $statement->execute();
    }
}