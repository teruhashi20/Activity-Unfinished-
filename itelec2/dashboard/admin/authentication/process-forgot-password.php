<?php
require 'vendor/autoload.php'; // Load PHPMailer
require_once 'admin-class.php'; // Include your admin class for session management and user handling

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new instance of the ADMIN class
    $admin = new ADMIN();
    
    // Get the email address from the form input
    $user_email = $_POST['email'];
    
    // Validate the email (you may want to check if the email exists in your database)
    if ($admin->isEmailExists($user_email)) { // Create this function in your admin-class.php
        // Create a unique token for the password reset link
        $token = bin2hex(random_bytes(50));
        // Save this token to the database for later verification (make sure to implement this step)

        // Prepare the reset link
        $reset_link = "http://localhost/itelec2/authentication/reset-password.php?token=" . $token; // Change to your actual domain

        // SMTP Configuration
        define('SMTP_HOST', 'smtp.gmail.com');
        define('SMTP_USERNAME', 'your_email@gmail.com'); // Your email
        define('SMTP_PASSWORD', 'your_email_password'); // Your email password
        define('SMTP_PORT', 587);
        define('SMTP_SECURE', 'tls');

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USERNAME;
            $mail->Password   = SMTP_PASSWORD;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->Port       = SMTP_PORT;

            // Recipients
            $mail->setFrom(SMTP_USERNAME, 'Your Company Name');
            $mail->addAddress($user_email); // Add user's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body    = 'Please click on the following link to reset your password: <a href="' . $reset_link . '">Reset Password</a>';

            // Send the email
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email does not exist in our records.";
    }
}
?>
