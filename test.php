<?php

require_once 'classes/Transaction.php';

$transaction = new Transaction();

$transaction->setSenderId(1);
$transaction->setReceiverId(1);
$transaction->setAmount(5);
$transaction->setMessage("Test transactie");

if ($transaction->save()) {
    echo "Transactie opgeslagen!";
}