<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Resetta la tua Password</h2>
    
    <form action="send_reset_email.php" method="post">
        Inserisci la tua email per ricevere le istruzioni di reset:
        <input type="email" name="reset_email" required>
        <input type="submit" value="Invia">
    </form>

    <p>Torna al <a href="index.php">login</a></p>
</body>
</html>