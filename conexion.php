<?php
class conexion
{
    static function conectar()
    {
        return mysqli_connect("localhost", "root", "", "traductor");
    }
}
