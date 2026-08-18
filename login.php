<?php

session_start();

require_once 'classes/User.php';

$message = "";

if (!empty($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = User::findByEmail($email);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];

        header("Location: dashboard.php");
        exit;
    } else {
        $message = "Email of wachtwoord is fout.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <p><?php echo htmlspecialchars($message); ?></p>

<div class="container">
    <div class="card">
        <h1>Login</h1>

        <form method="post">

            <input
                type="email"
                name="email"
                placeholder="Email"
                required
            >

            <br><br>

            <input
                type="password"
                name="password"
                placeholder="Wachtwoord"
                required
            >

            <br><br>

            <button type="submit">
                Login
            </button>

        </form>
    </div>    
</div>
</body>
</html>