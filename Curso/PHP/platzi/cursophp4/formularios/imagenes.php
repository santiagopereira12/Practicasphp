<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Imagen</title>
</head>
<body>
    <form action="./server_img.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name">

        <label for="image">Imagen</label>
        <input type="file" name="imagen" id="image">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>