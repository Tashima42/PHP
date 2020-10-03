<?php

require_once 'accounts-functions.php';

$accounts = [
  '11092.4194.24' => [
    'owner' => 'Pedro',
    'balance' => 1000
  ],
  '19202.1341.12' => [
    'owner' => 'Marcus',
    'balance' => 2000
  ]
];

$accounts['11092.4194.24']['balance'] = withdrawMoney($accounts['11092.4194.24']['balance'], 200);
$accounts['19202.1341.12']['balance'] = addMoney($accounts['19202.1341.12']['balance'], 200);

//unset($accounts['19202.1341.12']);

foreach ($accounts as $ssn => $accountInfo) {
  showMessage("$ssn - {$accountInfo['owner']}: U\$ {$accountInfo['balance']}");
}
