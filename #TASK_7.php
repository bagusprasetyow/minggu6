<?php
function salam($waktu, $nama)
{
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>task 7</title>
</head>
<body>
    <h1><?= salam("Pagi", "Bagus") ?></h1>
</body>
</html>