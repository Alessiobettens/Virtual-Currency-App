<?php

require_once 'classes/Transaction.php';

$transaction = new Transaction();

$transaction->setAmount(5);
$transaction->setMessage("Bedankt voor de hulp");

echo $transaction->getAmount();
echo "<br>";
echo $transaction->getMessage();