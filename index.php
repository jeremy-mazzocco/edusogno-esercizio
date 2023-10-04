<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div>
        <h2>Login</h2> <a href="./_admin/admin_dashboard.php">Vai all'area Admin</a>

        <form action="sql_login.php" method="post">
            Email: <input type="email" name="email" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>

        <p>Non hai un profilo? <a href="registration.php">Registrati</a></p>
        <p>Hai dimenticato la tua password? <a href="request_reset.php">Resetta password</a></p>
    </div>

</body>

</html>