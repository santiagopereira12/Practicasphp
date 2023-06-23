<?php

require ("Logic/createMichis.php");

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
    <h1>Michis Disponibles</h1>
    <ul>
        <li><?= $gatico->getName()?> dice: <?= $gatico->sayMew()?></li>
        <li><?= $gato->getName()?> dice: <?= $gato->sayMew()?></li>
        <li><?= $cat->getName()?> dice: <?= $cat->sayMew();?></li>
    </ul>
    <h1>Michis Adoptados</h1>
    <ul>
        <li><?=$reserva->getName()?> fue adoptado por: <?=$reserva->getAdoptedBy()?></li>
        <li><?=$apartad->getName()?> fue adoptado por: <?=$apartad->getAdoptedBy()?></li>
        <li><?=$adopte->getName()?> fue adoptado por: <?=$adopte->getAdoptedBy()?></li>
    </ul>
</body>
</html>