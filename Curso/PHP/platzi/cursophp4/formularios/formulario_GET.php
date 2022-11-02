<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable GET</title>
</head>
<body>
    <form action="./server_GET.php" method="get">
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" id="name">

        <label for="años">Edad:</label>
        <input type="text" name="edad" id="años">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>