<?php

session_start();

require_once 'classes/User.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user = User::getById($_SESSION['user_id']);

?>

<h1>Dashboard</h1>

<p>
    Welcome <?php echo htmlspecialchars($user['fullname']); ?>
</p>

<p>
    Balance:
    <?php echo htmlspecialchars($user['balance']); ?>
    tokens
</p>

<hr>

<p>
    <a href="transfer.php">Transfer Tokens</a>
</p>

<p>
    <a href="transactions.php">View Transactions</a>
</p>

<p>
    <a href="logout.php">Logout</a>
</p>