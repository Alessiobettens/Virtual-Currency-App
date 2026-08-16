<?php

require_once 'classes/Transaction.php';

$id = $_GET['id'];

$transaction = Transaction::getById($id);

?>

<h1>Transaction Details</h1>

<p>ID: <?php echo $transaction['id']; ?></p>
<p>Sender: <?php echo $transaction['sender_id']; ?></p>
<p>Receiver: <?php echo $transaction['receiver_id']; ?></p>
<p>Amount: <?php echo $transaction['amount']; ?></p>
<p>Message: <?php echo htmlspecialchars($transaction['message']); ?></p>
``