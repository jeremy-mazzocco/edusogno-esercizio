<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I tuoi Eventi</title>
</head>

<body>
    <div>
        <?php session_start(); ?>

        <h2>
            <?php echo 'Ciao ' . $_SESSION['username'] . ' ' . $_SESSION['lastname'] . ' ' . 'ecco i tuoi eventi' ?>
        </h2>

        <div>
            <ul>
                <?php
                foreach ($_SESSION['events'] as $card_event) {
                    echo "<li>" . $card_event . "</li>";
                }
                ?>
            </ul>
        </div>
    </div>


</body>

</html>