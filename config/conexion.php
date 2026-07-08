<?php
//*Conexion centralizada a la base de datos*//
//Todos los modelos utilizaran este archivo para acceder a MySQL.//

class Conexion
{
    public static function conectar()
    {
        $host = "hayabusa.proxy.rlwy.net";
        $puerto = 40580;
        $bd = "railway";
        $usuario = "root";
        $clave = "rXpqcGApkBfbpwtJrqUqHuMyotEzDAcO";

        $conn = new mysqli($host, $usuario, $clave, $bd, $puerto);

        if ($conn->connect_error) {
            die("Error de conexion: " . $conn->connect_error);
        }

        return $conn;
    }
}
