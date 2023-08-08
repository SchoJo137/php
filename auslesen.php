<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auslesen des Formulars</title>
</head>
<body>
    
<h1>Auslesen des Formulars</h1>
  
  <?php

    // var_dump($_POST);

    $zahl1 = $_POST["zahl1"];
    $zahl2 = $_POST["zahl2"];

    print($zahl1);
    print("<br />");
    print($zahl2);

    print("<br />");

    $ergebnis = $zahl1 + $zahl2;

    print($ergebnis);


  ?>


</body>
</html>