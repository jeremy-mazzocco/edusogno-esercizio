<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>
    <form action="send_reset_link.php" method="post">
        Email: <input type="email" name="user_email" required>
        <input type="submit" value="Send Reset Link">
    </form>

</body>

</html>