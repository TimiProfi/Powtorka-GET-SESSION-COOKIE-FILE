
<?php
session_start();

// Tworzenie liczników, jeśli jeszcze nie istnieją
if (!isset($_SESSION['mleko'])) {
    $_SESSION['mleko'] = 0;
}

if (!isset($_SESSION['szynka'])) {
    $_SESSION['szynka'] = 0;
}

if (!isset($_SESSION['chleb'])) {
    $_SESSION['chleb'] = 0;
}

// Pobieranie produktu przez GET
if (isset($_GET['produkt'])) {

    if ($_GET['produkt'] == 'mleko') {
        $_SESSION['mleko']++;
    } elseif ($_GET['produkt'] == 'szynka') {
        $_SESSION['szynka']++;
    } elseif ($_GET['produkt'] == 'chleb') {
        $_SESSION['chleb']++;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk</title>
</head>
<body>

<h2>Wybierz produkt:</h2>

<a href="?produkt=mleko">Mleko</a><br>
<a href="?produkt=szynka">Szynka</a><br>
<a href="?produkt=chleb">Chleb</a><br>

<h2>Twój koszyk:</h2>

<?php
echo "Mleko: " . $_SESSION['mleko'] . "<br>";
echo "Szynka: " . $_SESSION['szynka'] . "<br>";
echo "Chleb: " . $_SESSION['chleb'] . "<br>";
?>

</body>
</html>
