<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czas do weekendu</title>
</head>
<body>
    <?php
    $teraz = time();
    $weekend = strtotime("next Friday 13:00");

    $roznica = $weekend - $teraz;

    $minuty = $roznica / 60;
    $godziny = $minuty / 60;
    $dni = $godziny / 24;
    
    echo "minuty - $minuty";
    echo "godziny - $godziny";
    echo "dni - $dni";
?>
</body>
</html>