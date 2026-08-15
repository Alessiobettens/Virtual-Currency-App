<?php

require_once 'classes/User.php';

$user = User::getById(1);

var_dump($user);