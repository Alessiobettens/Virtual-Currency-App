<?php

session_start();

require_once 'classes/Transaction.php';
require_once 'classes/User.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$message = "";

if (!empty($_POST)) {

    $user = User::getById($_SESSION['user_id']);

    if ($_POST['amount'] < 1) {
    $message = "Amount must be at least 1";
    }
   
    elseif ($_POST['amount'] > $user['balance']) {

        $message = "Not enough tokens";

    }

    
    else {

        $transaction = new Transaction();

        $transaction->setSenderId($_SESSION['user_id']);
        $transaction->setReceiverId((int)$_POST['receiver_id']);
        $transaction->setAmount((float)$_POST['amount']);
        $transaction->setMessage($_POST['message']);

        if ($transaction->save()) {
            $message = "Transfer succesvol!";
        }
    }
}
?>

<form method="post">
    <p><?php echo htmlspecialchars($message); ?></p>


    <input type="number" name="receiver_id" placeholder="Receiver ID">

    <br><br>

    <input type="number" name="amount" placeholder="Amount">

    <br><br>

    <textarea name="message"></textarea>

    <br><br>

    <button type="submit">
        Send
    </button>

</form>