<?php

require_once 'classes/User.php';

$user = new User();

$user->setFullname("Alessio Bettens");
$user->setEmail("alessio@student.thomasmore.be");
$user->setBalance(10);

echo $user->getFullname();
echo "<br>";
echo $user->getEmail();
echo "<br>";
echo $user->getBalance();