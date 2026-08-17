<?php

session_start();

require_once '../classes/User.php';

$user = User::getById($_SESSION['user_id']);

echo $user['balance'];