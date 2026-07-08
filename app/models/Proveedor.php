<?php

// Se importa la conexión a la base de datos.
require_once __DIR__ . "/../../config/conexion.php";


// Modelo encargado de manejar la tabla proveedor.

class Proveedor
{


    // Obtener todos los proveedores.
    public static function obtenerTodos()
    {

        $conn = Conexion::conectar();


        $sql = "SELECT 
                    id_proveedor,
                    nombre,
                    telefono,
                    email,
                    direccion
                FROM proveedor
                ORDER BY id_proveedor ASC";


        $resultado = $conn->query($sql);


        $proveedores = [];


        if ($resultado) {

            while ($fila = $resultado->fetch_assoc()) {

                $proveedores[] = $fila;

            }
        }
        return $proveedores;

    }

    // Obtener proveedor por ID.
    public static function obtenerPorId($id)
    {
        $conn = Conexion::conectar();

        $id = (int)$id;
        $sql = "SELECT 
                    id_proveedor,
                    nombre,
                    telefono,
                    email,
                    direccion
                FROM proveedor
                WHERE id_proveedor = $id
                LIMIT 1";

        $resultado = $conn->query($sql);

        return $resultado->fetch_assoc();
    }

    // Crear proveedor.
    public static function crear(
        $nombre,
        $telefono,
        $email,
        $direccion
    )
    {
        $conn = Conexion::conectar();

        $nombre = $conn->real_escape_string($nombre);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $direccion = $conn->real_escape_string($direccion);
        $sql = "INSERT INTO proveedor
                (
                    nombre,
                    telefono,
                    email,
                    direccion
                )
                VALUES
                (
                    '$nombre',
                    '$telefono',
                    '$email',
                    '$direccion'
                )";

        return $conn->query($sql);

    }

    // Actualizar proveedor.
    public static function actualizar(
        $id,
        $nombre,
        $telefono,
        $email,
        $direccion
    )
    {
        $conn = Conexion::conectar();

        $id = (int)$id;
        $nombre = $conn->real_escape_string($nombre);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $direccion = $conn->real_escape_string($direccion);

        $sql = "UPDATE proveedor
                SET
                    nombre='$nombre',
                    telefono='$telefono',
                    email='$email',
                    direccion='$direccion'

                WHERE id_proveedor=$id";
        return $conn->query($sql);

    }

    // Eliminar proveedor.
    public static function eliminar($id)
    {

        $conn = Conexion::conectar();

        $id = (int)$id;
        $sql = "DELETE FROM proveedor
                WHERE id_proveedor=$id";

        return $conn->query($sql);
    }
}