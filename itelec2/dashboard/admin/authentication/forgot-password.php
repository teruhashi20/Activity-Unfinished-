<?php
require_once 'admin-class.php';
$admin = new ADMIN();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_forgot_password'])) {
    $email = $_POST['email'];
    // Check if email exists in the database
    // Generate token and send email (this should be in the admin class)
    // Implement the token generation and email sending logic here
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../../src/css/main.css">
</head>
<body>
    <div class="form-container">
        <h1>Forgot Password</h1>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit" name="btn_forgot_password">Send Reset Link</button>
        </form>
    </div>
</body>
</html>