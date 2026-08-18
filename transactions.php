<?php

require_once 'classes/Transaction.php';

$transactions = Transaction::getAll();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">

<h1>Transactions</h1>

<?php foreach ($transactions as $transaction): ?>

    <p>
        Sender:
        <?php echo $transaction['sender_id']; ?>

        |

        Receiver:
        <?php echo $transaction['receiver_id']; ?>

        |

        Amount:
        <?php echo $transaction['amount']; ?>

        |

        Message:
        <?php echo htmlspecialchars($transaction['message']); ?>
    </p>

    <p>
        <a href="transaction.php?id=<?php echo $transaction['id']; ?>">
            Transaction #<?php echo $transaction['id']; ?>
        </a>
    </p>

<?php endforeach; ?>

</body>
</html>