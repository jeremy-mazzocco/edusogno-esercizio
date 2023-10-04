<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500" />
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    
    <title>Log-in</title>
</head>

<body>
    
        <h2>Login</h2> <a href="./views/admin/admin_dashboard.php">Vai all'area Admin</a>

        <form action="./handlers/login_handlers.php" method="post">
            Email: <input type="email" name="email" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>

        <p>Non hai un profilo? <a href="./views/registration.php">Registrati</a></p>
        <p>Hai dimenticato la tua password? <a href="./views/request_reset.php">Resetta password</a></p>
   







</body>

</html>