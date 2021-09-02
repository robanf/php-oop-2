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
    <h2>Oggetti che puoi comprare:</h2>
    <div><strong><?php echo $forbici->name ?> </strong>: <strong> prezzo=</strong><?php echo $forbici->getCosto() ?> <strong> disponibile=</strong><?php echo $forbici->getDispo() ?>  ,<br> <strong><?php echo $zaino->name ?> </strong>: <strong> prezzo=</strong><?php echo $zaino->getCosto() ?> <strong> disponibile=</strong><?php echo $zaino->getDispo() ?> </div>

    <h2>Franco prova a comprare roba:</h2>
    <div><strong><?php echo $franco->name ?></strong> prova a comprare <strong><?php echo $forbici->name ?> : <?php  echo $forbici->possoComprarlo($franco->getPortafoglio())?></strong></div>
    <div><strong><?php echo $franco->name ?></strong> prova a comprare <strong><?php echo $zaino->name ?> : <?php  echo $zaino->possoComprarlo($franco->getPortafoglio())?></strong></div>

    <h2>Pluto prova a comprare roba:</h2>
    <div><strong><?php echo $pluto->name ?></strong> prova a comprare <strong><?php echo $forbici->name ?> : <?php  echo $forbici->possoComprarlo($pluto->getPortafoglio())?></strong></div>
    <div><strong><?php echo $pluto->name ?></strong> prova a comprare <strong><?php echo $zaino->name ?> : <?php  echo $zaino->possoComprarlo($pluto->getPortafoglio())?></strong></div>
</body>
</html>