<?php
include_once 'config/settings-config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <style>
        body {
            background-color: #000; /* Black background */
            color: #fff; /* White text for better contrast */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #3498db; /* Blue heading */
        }

        form {
            background-color: #1c1c1c; /* Dark grey background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #3498db; /* Blue border */
            background-color: #333;
            color: #fff;
        }

        input[type="number"]::placeholder {
            color: #bbb;
        }

        button {
            background-color: #3498db; /* Blue button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    
    <h1>Enter OTP</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
        <input type="number" name="otp" placeholder="Enter OTP" required><br>
        <button type="submit" name="btn-verify">VERIFY</button>
    </form>

</body>
</html>
