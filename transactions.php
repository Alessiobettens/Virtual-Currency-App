<?php

require_once 'classes/Transaction.php';

$transactions = Transaction::getAll();

?>

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

<?php endforeach; ?>