<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #efbb3c;
            height: 100%;
        }

        .mensaje {
            background-color: rgba(255, 255, 255, 0.5);
        }

        html,
        body {
            height: 100%;
        }

        .jumbotron.vertical-center {
            margin-bottom: 0;
        }

        .vertical-center {
            min-height: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: center;
        }
    </style>
</head>

<body>


<?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$message=$_POST["mensaje"];

$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." apellido: ".$apellido." email: ".$email." Mensaje: ".$message;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}

$conexion= mysqli_connect("localhost","root","", "contactos");




$consulta= mysqli_query($conexion, "INSERT INTO usuarios (nombre,apellido,email,mensaje) VALUES ( '$nombre','$apellido','$email','$message')");



?>

    <div class="jumbotron vertical-center">

        <div class="container text-center mensaje py-5 rounded-3">
            <h1 class=""> Muchas gracias Por completar el formulario! En breve responderemos su consulta</h1>
            <div class="row">
                <a class="my-auto text-center" href="contacto.html">Volver a enviar un mensaje</a>
            </div>
        </div>
    </div>

    </div>
</body>

</html>