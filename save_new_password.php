<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Passoword</title>
</head>

<body>
    <div>
        <?php
        
        // save_new_password.php
        include 'db_connection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $token = $_GET["token"];
            $new_password = $_POST["new_password"];
            $confirm_password = $_POST["confirm_password"];

            if ($new_password === $confirm_password) {
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                $query = "UPDATE utenti SET password='$hashed_password', reset_token=NULL WHERE reset_token='$token'";
                mysqli_query($conn, $query);

                echo "Password resettata con successo!";
            } else {
                echo "Le password non corrispondono!";
            }
        }

        ?>


</body>

</html>