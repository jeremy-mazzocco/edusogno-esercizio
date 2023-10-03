<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>

<body>

    <?php
    session_start();
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
    unset($_SESSION['message']);
    ?>

    <?php if ($message) : ?>
        <p><?php echo $message; ?></p>
        <p><a href="index.php">Vai alla pagina di Login</a></p>
    <?php else : ?>

        <h2>Crea il tuo account</h2>

        <form action="sql_registration.php" method="post">
            Nome: <input type="text" name="nome" required><br><br>
            Cognome: <input type="text" name="cognome" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Registrati">
        </form>

        <p>Hai già un account? <a href="index.php">Accedi</a></p>


    <?php endif; ?>

</body>

</html>