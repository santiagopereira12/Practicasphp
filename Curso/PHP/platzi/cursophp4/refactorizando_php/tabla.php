<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>TABLA DEL 5</h1>
    <ul>
        <?php
        for($i = 0; $i < 10; $i++){
            echo "<li>" ."5 x " .($i+1). "=" .(5*($i+1));
        }
        ?>
    </ul>
</body>
</html>