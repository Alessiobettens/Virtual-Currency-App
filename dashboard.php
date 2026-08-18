<?php

session_start();

require_once 'classes/User.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user = User::getById($_SESSION['user_id']);

?>

<div class="container">
<link rel="stylesheet" type="text/css" href="assets/style.css">
    <div class="card">

        <h1>Dashboard</h1>

        <p>
            Welcome <?php echo htmlspecialchars($user['fullname']); ?>
        </p>

        <p>
            Balance:
            <span id="balance">
                <?php echo htmlspecialchars($user['balance']); ?>
            </span>
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

    </div>

</div>

<script>

    setInterval(() => {

        fetch('ajax/getBalance.php')
            .then(response => response.text())
            .then(data => {

                document.getElementById('balance').innerText = data;

            });

    }, 10000);

</script>