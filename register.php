<?php
// Start the session
session_start();
include 'db.php'; // Include your database connection file

// Initialize variables
$username = $email = $password = $confirm_password = "";
$errors = [];

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate inputs
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // If no errors, proceed to store data in the database
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare an SQL statement to insert user data
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful, redirect to login or dashboard
            $_SESSION['user_id'] = $conn->insert_id; // Store user id in session
            header("Location: dashboard.php"); // Redirect to the dashboard
            exit;
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/assets/css/global/register.css">
</head>
<body>
<div class="gradients"></div>
<form class="form" method="POST" action="">
    <p class="title">Register</p>
    <p class="message">Signup now and get full access to our app.</p>
    
    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <?php foreach ($errors as $error): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <label>
        <input required="" placeholder=" " type="text" name="username" class="input" value="<?php echo htmlspecialchars($username); ?>">
        <span>Username</span>
    </label>

    <label>
        <input required="" placeholder=" " type="email" name="email" class="input" value="<?php echo htmlspecialchars($email); ?>">
        <span>Email</span>
    </label>
    
    <label>
        <input required="" placeholder=" " type="password" name="password" class="input">
        <span>Password</span>
    </label>
    
    <label>
        <input required="" placeholder=" " type="password" name="confirm_password" class="input">
        <span>Confirm password</span>
    </label>
    
    <button class="submit">Submit</button>
    <p class="signin">Already have an account? <a href="login.php">Sign In</a></p>
    
</form>

</body>
</html>
