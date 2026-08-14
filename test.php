<?php

require_once 'classes/Db.php';

$conn = Db::getConnection();

echo "Database connected!";