<?php
    $server="localhost";
    $usuario="root";
    $contraseña="";
    $bd="portafolio";
    $conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
    or die ("eroor");

    $consulta=mysqli_query($conexion,"SELECT * from datos")
    or die ("error al traer datos");

echo '<table border="1">';
echo '<tr>';
echo '<th id="clave">Clave</th>';
echo '<th id="nombre">Nombre</th>';
echo '<th id="sexo">Sexo</th>';
echo '</tr>';

while ($extraido=mysqli_fetch_array($consulta))
{

    echo '<tr>';
    echo'<td>'.$extraido['clave'].'</td>';
    echo'<td>'.$extraido['nombre'].'</td>';
    echo'<td>'.$extraido['sexo'].'</td>';
    echo '</tr>';

}

mysqli_close($conexion);
echo '</table>';
