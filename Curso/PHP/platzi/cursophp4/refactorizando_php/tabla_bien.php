<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla del 7</title>
</head>
<body>
    <ul>
        <?php for ($i=1; $i <= 10; $i++):?>
            <li>7 x <?=$i?> = <?= 7 * ($i)?></li>
        <?php endfor;?>
    </ul>
</body>
</html>