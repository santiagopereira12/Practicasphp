<?php 
require ("mail.php");

function validationForm($name, $email, $subject, $message, $form){
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message) && isset($form);
}

$status = "";

if(isset($_POST["form"])){
    if(validationForm($_POST["nombre"],$_POST["correo"],$_POST["asunto"],$_POST["message"],$_POST["form"])){
        $name = $_POST["nombre"];
        $email = $_POST["correo"];
        $subject = $_POST["asunto"];
        $message = $_POST["message"];

        $body = "$name <$email> <br>Se contanta contigo:<br><br>$message";

        /*
        ENVIAR CORREO
        */
        envioCorreo($subject, $body, $email, $name, true);

        $status = "success";
    }else{
        $status = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/55a89c90f7.js" crossorigin="anonymous"></script>
    <title>Formulario de contacto</title>
</head>
<body>
    <?php if($status == "danger"): ?>
        <div class="alert danger">
            <span>hubo un problema</span>
        </div>
    <?php endif; ?>

    <?php if($status == "success"):?>
        <div class="alert success">
            <span>¡ENVIO EXITOSO!</span>
        </div>
    <?php endif;?>
    
    

    <form action="./" method="post">
        <h1>¡CONTACTO!</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="nombre" id="name">
        </div>
        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="text" name="correo" id="email">
        </div>
        <div class="input-group">
            <label for="asunt">Asunto:</label>
            <input type="text" name="asunto" id="asunt">
        </div>
        <div class="input-group">
            <label for="mensaje">Mensaje:</label>
            <textarea name="message" id="mensaje"></textarea>
        </div>

        <div class="button-container">
            <button type="submit" name="form">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-house"></i>Kr 147 # 145-40 cs 93</span>
            </div>
            <div class="info">
                <span><i class="fas fa-phone-volume"></i>+57 313 342 1714</span>
            </div>
        </div>
    </form>
</body>
</html>