<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE['licznik'])) {
            $licznik = $_COOKIE['licznik'];
            $licznik++;
        } else {
            $licznik = 1;
        }
        setcookie('licznik', $licznik, time() + 3600);
        echo "odwiedziles $licznik razy!";

        $plik = fopen('licznik1.txt','w');
        fwrite($plik,$licznik);
        fclose($plik);
    ?>
</body>
</html>