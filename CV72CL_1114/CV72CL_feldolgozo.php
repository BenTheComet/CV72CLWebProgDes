<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozó</title>
</head>
<body>
    <?php

    if (isset($_POST)) {
        echo "<h2>Úrlap adatok:</h2>"
    
        $nev = $_POST["nev"];
        $pin = $_POST["pin"];
        $fav_fruit = $_POST["fav_fruit"];
        $age = $_POST["age"];
        $feet_size = $_POST["feet_size"];
        $confidence = $_POST["confidence"];
    
        echo "<p><strong>Név:</strong>". $nev . "</p>"
        echo "<p><strong>PIN kód:</strong>". $pin . "</p>"
        echo "<p><strong>Kedvenc gyümölcs:</strong>". $fav_fruit . "</p>"
        echo "<p><strong>Életkor:</strong>". $age . "</p>"
        echo "<p><strong>Lábméret</strong>". $feet_size . "</p>"
        echo "<p><strong>Önbizalom</strong>". $confidence . "</p>"
    } else {
        echo "<h2>Űrlap nem lett beküldve"
    }
    ?>

    <a href="CV72CL_urlap.html">Vissza az űrlap</a>

</body>
</html>