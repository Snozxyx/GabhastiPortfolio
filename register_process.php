<!-- register_process.php -->
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Save user data (in a real app, use a database)
    $user_data = "$name,$email,$password\n";
    file_put_contents('users.txt', $user_data, FILE_APPEND);

    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    header("Location: dashboard.php");
    exit();
}
?>
