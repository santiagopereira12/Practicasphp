<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Inputs</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">

        <!--Input simple-->
        <!--<label for="name">Nombre: </label>
        <input type="text" name="nombre" id="name">-->

        <!--Arreglos-->
        <!--<label>Nombres: </label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">-->

        <!--Arreglos Asociativos-->
        <!--<label>Apellido: </label>
        <input type="text" name="dato[apellido]">
        <label>Correo electronico</label>
        <input type="email" name="dato[email]">
        <label>Edad: </label>
        <input type="number" name="dato[edad]">-->

        <!--Checkout-->
        <!--<input type="checkbox" name="lista1">
        <input type="checkbox" name="lista2" value="valor">
        <input type="checkbox" name="lista3">-->

        <!--Radio-->
        <!--<label for="iphone">Iphone</label>
        <input type="radio" name="celular" value="Iphone" id="iphone">
        <label for="xiaomi">Xiaomi</label>
        <input type="radio" name="celular" value="Xiaomi" id="xiaomi">
        <label for="samsung">Samsung</label>
        <input type="radio" name="celular" value="Samsung" id="samsung">-->

        <!--Multiples Archivos-->
        <label for="galeria">cargar imagenes</label>
        <input type="file" multiple name="imagenes[]" id="galeria">


        <button type="submit">Enviar</button>
    </form>
</body>
</html>