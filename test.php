<?php

require_once 'classes/Transaction.php';

$transactions = Transaction::getAll();

print_r($transactions);