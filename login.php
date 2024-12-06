<?php
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: dashboard.php"); // Redirect to dashboard
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email!";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/global/register.css">

</head>
<body>
<div class="gradients"></div>


        <form class="form" method="POST" action="">
    <p class="title">Login</p>
    <p class="message">Login to authorize yourself and access to authorize contents</p>
    
  



    <label>
        <input required="" placeholder=" " type="email" name="email" class="input" value="">
        <span>Email</span>
    </label>
    
    <label>
        <input required="" placeholder=" " type="password" name="password" class="input">
        <span>Password</span>
    </label>
    
  
    
    <button class="submit">Submit</button>
    <p class="signin">Create Account?<a href="register.php">Sign Up</a></p>
</form>
    </div>
</body>
</html>
