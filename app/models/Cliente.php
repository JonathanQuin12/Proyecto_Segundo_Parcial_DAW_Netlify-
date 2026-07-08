<?php

// Clase Cliente que maneja las operaciones CRUD de la tabla cliente.

// Se importa la clase Conexion para conectarse a la base de datos.
require_once __DIR__ . "/../../config/conexion.php";

class Cliente
{
    // Obtiene todos los clientes registrados.
    public static function obtenerTodos()
    {
        // Obtener la conexión a la base de datos.
        $conn = Conexion::conectar();

        // Consulta SQL.
        $sql = "SELECT * FROM cliente";

        // Ejecutar la consulta.
        $resultado = $conn->query($sql);

        // Arreglo donde se almacenarán los clientes.
        $clientes = [];

        // Recorrer cada registro obtenido.
        while ($fila = $resultado->fetch_assoc()) {
            $clientes[] = $fila;
        }

        // Retornar el arreglo de clientes.
        return $clientes;
    }

    // Obtiene un cliente según su ID.
    public static function obtenerPorId($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "SELECT * FROM cliente WHERE id_cliente = $id LIMIT 1";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Retornar el cliente encontrado.
        return $resultado->fetch_assoc();
    }

    // Registrar un nuevo cliente.
    public static function crear($nombre, $telefono, $email, $direccion)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Escapar caracteres especiales.
        $nombre = $conn->real_escape_string($nombre);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $direccion = $conn->real_escape_string($direccion);

        // Consulta SQL.
        $sql = "INSERT INTO cliente(nombre, telefono, email, direccion)
                VALUES('$nombre','$telefono','$email','$direccion')";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Actualizar un cliente existente.
    public static function actualizar($id, $nombre, $telefono, $email, $direccion)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Escapar caracteres especiales.
        $nombre = $conn->real_escape_string($nombre);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $direccion = $conn->real_escape_string($direccion);

        // Consulta SQL.
        $sql = "UPDATE cliente
                SET nombre='$nombre',
                    telefono='$telefono',
                    email='$email',
                    direccion='$direccion'
                WHERE id_cliente=$id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Eliminar un cliente.
    public static function eliminar($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "DELETE FROM cliente WHERE id_cliente=$id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }
}