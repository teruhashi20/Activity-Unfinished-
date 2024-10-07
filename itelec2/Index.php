<?php
include_once 'config/settings-config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <link rel="stylesheet" href="src/css/style.css">

</head>
<body>
    <div class="form-container">
        <div class="form-section">
            <h1>SIGN IN</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit" name="btn_signin">Login</button>
            </form>
            <p><a href="dashboard/admin//authentication//forgot-password.php">Forgot Password?</a></p>
        </div>

        <div class="form-section">
            <h1>SIGN UP</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit" name="btn_signup">Register</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 YourCompany</p>
    </footer>
</body>
</html>
