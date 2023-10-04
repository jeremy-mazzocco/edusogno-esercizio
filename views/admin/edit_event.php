<?php include '../../handlers/admin/edit_event_handlers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Evento</title>
</head>

<body>

    <?php if ($event) : ?>
        <form action="../../handlers/admin/edit_event_handlers.php" method="post">

            <input type="hidden" name="id" value="<?php echo $event->getId(); ?>">
            Nome evento: <input type="text" name="nome_evento" value="<?php echo $event->getNomeEvento(); ?>" required><br>
            Data evento: <input type="date" name="data_evento" value="<?php echo $event->getDataEvento(); ?>" required><br>
            Partecipanti: <input type="text" name="attendees" value="<?php echo $event->getAttendees(); ?>" required><br>
            <input type="submit" value="Modifica Evento">

        </form>
    <?php else : ?>
        <p>Evento non trovato!</p>
    <?php endif; ?>

</body>

</html>