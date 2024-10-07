<?php
require_once 'authentication/admin-class.php';
$admin = new ADMIN();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_reset_password'])) {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    
    // Verify token and update password in the database
    // Implement the token verification and password updating logic here
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../../src/css/main.css">
</head>
<body>
    <div class="form-container">
        <h1>Reset Password</h1>
        <form method="POST" action="">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
            <input type="password" name="new_password" placeholder="Enter new password" required>
            <button type="submit" name="btn_reset_password">Reset Password</button>
        </form>
    </div>
</body>
</html>