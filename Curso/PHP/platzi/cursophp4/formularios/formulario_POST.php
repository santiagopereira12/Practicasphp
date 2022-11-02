<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable POST</title>
</head>
<body>
    <form action="./server_POST.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="name" id="nombre">

        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" id="cargo">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>