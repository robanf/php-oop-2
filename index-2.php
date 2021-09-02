<?php
    require_once 'compratore.php';
    require_once 'item.php';

    $franco= new Compratore('Franco',10);
    $pluto= new Compratore('Pluto', 100000);

    $forbici= new Item('forbici', 12, true);
    $zaino= new Item('zaino',30,false);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>