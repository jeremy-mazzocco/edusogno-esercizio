<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Evento</title>
</head>

<body>

    <form action="../../handlers/admin/add_event_handlers.php" method="post">
        Attendees: <input type="text" name="attendees" required><br>
        Nome Evento: <input type="text" name="nome_evento" required><br>
        Data Evento: <input type="date" name="data_evento" required><br>
        <input type="submit" value="Aggiungi Evento">
    </form>

</body>

</html>