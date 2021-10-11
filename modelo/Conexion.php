<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "portafolio";
    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
        or die("eroor");
    $clave = $_POST['txtClave'];
    $nombre = $_POST['txtNombre'];
    $sexo = $_POST['cmbSexo'];
    $insertar = "INSERT into datos values ('$clave','$nombre','$sexo')";
    $resultado = mysqli_query($conexion, $insertar)
        or die("eroor");

    mysqli_close($conexion);
    echo "Datos insertados";
    ?>

</body>

</html>