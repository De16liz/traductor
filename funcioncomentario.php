<?php

/**estas son las funciones del comentario
 * @param  
 */

guardar_comentario ($ID_comentario = $_GET['ID_comentario'], $comentario = $_GET['comentario'], $fecha = $_GET['fecha']);

function guardar_comentario( $ID_comentario, $comentario, $fecha )
{
    include("conexion.php");
    $sql = "INSERT INTO tb_comentario VALUES ('$ID_comentario', '$comentario', ' $fecha')";
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