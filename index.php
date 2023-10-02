<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
</head>

<body>
    <div>
        <h2>Login</h2>

        <form action="sql.php" method="post">
            Email: <input type="email" name="email" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>

        <!-- Link alla pagina di registrazione -->
        <p>Non hai un profilo? <a href="registration.php">Registrati</a></p>
        <?php
        include 'db_connection.php';

        ?>
    </div>


</body>

</html>