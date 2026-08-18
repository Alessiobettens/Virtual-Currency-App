<?php

require_once 'classes/User.php';

$message = "";

if (!empty($_POST)) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Controle email
    if (!str_ends_with($email, '@student.thomasmore.be')) {
        $message = "Gebruik een ThomasMore e-mailadres.";
    }

    // Controle wachtwoord
    elseif (strlen($password) < 5) {
        $message = "Wachtwoord moet minstens 5 karakters hebben.";
    }

    else {

        $user = new User();

        $user->setFullname($fullname);
        $user->setEmail($email);

        $hashedPassword = password_hash(
            $password,
            PASSWORD_BCRYPT
        );

        $user->setPassword($hashedPassword);
        $user->setBalance(10);

        $user->save();

        $message = "Registratie gelukt!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registreren</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Registreren</h1>

        <p><?php echo $message; ?></p>

        <form method="post">

            <label>Volledige naam</label>
            <br>
            <input type="text" name="fullname" required>

            <br><br>

            <label>Email</label>
            <br>
            <input type="email" name="email" required>

            <br><br>

            <label>Wachtwoord</label>
            <br>
            <input type="password" name="password" required>

            <br><br>

            <button type="submit">
                Registreren
            </button>

            <p>
                <a href="login.php">Back to Login</a>
            </p>

        </form>
    </div>
</div>
</body>
</html>
