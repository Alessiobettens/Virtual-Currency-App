<?php

require_once 'classes/User.php';

$user = User::findByEmail("alessio@student.thomasmore.be");

var_dump($user);