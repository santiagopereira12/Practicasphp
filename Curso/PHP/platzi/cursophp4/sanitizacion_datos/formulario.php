<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizacion de datos</title>
</head>
<body>
    <form action="server.php" method="POST">
         
        <label for="nombre">Nombre</label>
        <input type="text" name="name" id="nombre">

        <label for="userName">Username</label>
        <input type="text" name="user" id="userName">

        <label for="email">Correo</label>
        <input type="text" name="correo" id="email">

        <label for="age">Edad</label>
        <input type="text" name="edad" id="age">

        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>