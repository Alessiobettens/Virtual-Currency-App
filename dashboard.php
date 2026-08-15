<?php

session_start();

require_once 'classes/User.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user = User::getById($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welkom <?php echo htmlspecialchars($user['fullname']); ?></h1>

<p>
    Saldo:
    <?php echo htmlspecialchars($user['balance']); ?>
    tokens
</p>

<a href="logout.php">Uitloggen</a>

</body>
</html>