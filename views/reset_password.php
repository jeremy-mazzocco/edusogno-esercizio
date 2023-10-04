<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
</head>

<body>

  <div>

    <?php include './includes/db_connection.php';
    $token = $_GET['token'];
    ?>

    <form action="../handlers/save_new_password.php?token=<?php echo $token; ?>" method="post">
      Nuova Password: <input type="password" name="new_password" required>
      Conferma Password: <input type="password" name="confirm_password" required>
      <input type="submit" value="Reset Password">
    </form>

  </div>

</body>

</html>