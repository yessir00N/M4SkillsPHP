<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html en Php</title>
</head>
<body>
    <?php

    $name = "Yessin";
    $leeftijd = 18;
    $achternaam = "van der Hulst";
    $leeftijdNieuw = $leeftijd + 1;
    echo "<h1>Hello ik {$name}</h1>";
    echo "Ik ben $name $achternaam, en ik ben $leeftijd";
    echo "<br>Over een jaar ben ik $leeftijdNieuw";

    if ($leeftijd == 18) {
    echo "<br>Ik mag drink alcohol";
    }   
    ?>
</body>
</html>