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
    <ul>
        <li><?= $gatico->getName()?> dice: <?= $gatico->sayMew()?></li>
        <li><?= $gato->getName()?> dice: <?= $gato->sayMew()?></li>
        <li><?= $cat->getName()?> dice: <?= $cat->sayMew();?></li>
    </ul>
</body>
</html>