$user = new User();

$user->setFullname($_POST['fullname']);
$user->setEmail($_POST['email']);

$hashedPassword = password_hash(
    $_POST['password'],
    PASSWORD_BCRYPT
);

$user->setPassword($hashedPassword);

$user->setBalance(10);

$user->save();
