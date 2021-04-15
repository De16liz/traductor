<?php

/**estas son las funciones del traductor.php */

guardar_traductor ($glosario = $_GET ['glosario'], $idioma = $_GET['idioma'], $fecha = $_GET['fecha'], $palabra =  $_GET['palabra'], $traduccion =  $_GET['traduccion']);

function guardar_traductor($glosario, $idioma, $fecha, $palabra, $traduccion)
{
    include("conexion.php");
    $sql = "INSERT INTO tb_traductor VALUES ('$glosario', '$idioma', ' $fecha', '$palabra', '$traduccion')";
    echo $sql;
    $resultado = $conexion->query($sql);

    if($conexion->affected_rows > 0)
{
     echo "tus datos se guardaron. ";

}
else{
     echo "tus datos no se guardaron. ";
}

}