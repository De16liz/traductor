<?php

/**estas son las funciones del idioma.php */

guardar_idioma ($idioma = $_GET['idioma'], $termino = $_GET['termino'], $fecha = $_GET['fecha']);

function guardar_idioma( $idioma, $termino, $fecha )
{
    include("conexion.php");
    $sql = "INSERT INTO tb_idioma VALUES ('$idioma', '$termino', ' $fecha')";
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
