<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventi</title>
</head>

<body>
    <div>
        <?php session_start(); ?>

        <h2>
            <?php echo 'Ciao ' . $_SESSION['username'] . ' ' . $_SESSION['lastname'] . 'ecco i tuoi eventi' ?>
        </h2>

        <div>
            <?php

            foreach ($_SESSION['events'] as $card_event) {
                echo "<h3>" . $card_event . "</h3>";
            }

            ?>
        </div>
    </div>


</body>

</html>