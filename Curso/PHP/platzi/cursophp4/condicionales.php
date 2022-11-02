<?php
$numero1 = 14;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php if($numero1 >= 15){
        $numero2 = 15;
        $suma = $numero1 + $numero2;
        echo $suma;
    } else{
        $numero2 = 15;
        $resta = $numero1 - $numero2;
        echo $resta;
    }
    ?>
</body>
</html>