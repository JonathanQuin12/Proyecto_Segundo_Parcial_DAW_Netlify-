<?php
// Clase Empleado que maneja las operaciones CRUD de la tabla empleado.

// Se importa la clase Conexion para conectarse a la base de datos.
require_once __DIR__ . "/../../config/conexion.php";

class Empleado
{

    // Obtiene todos los empleados registrados.
    public static function obtenerTodos()
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Consulta SQL.
        $sql = "SELECT *
                FROM empleado
                ORDER BY id_empleado ASC";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Arreglo donde se almacenarán los empleados.
        $empleados = [];

        // Recorrer cada registro.
        while ($fila = $resultado->fetch_assoc()) {
            $empleados[] = $fila;
        }

        // Retornar arreglo.
        return $empleados;
    }

    // Obtiene un empleado según su ID.
    public static function obtenerPorId($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "SELECT *
                FROM empleado
                WHERE id_empleado = $id
                LIMIT 1";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Retornar empleado.
        return $resultado->fetch_assoc();
    }

    // Registrar un nuevo empleado.
    public static function crear(
        $nombre,
        $cargo,
        $telefono,
        $email,
        $fechaContratacion
    )
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Limpiar datos.
        $nombre = $conn->real_escape_string($nombre);
        $cargo = $conn->real_escape_string($cargo);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $fechaContratacion = $conn->real_escape_string($fechaContratacion);

        // Consulta SQL.
        $sql = "INSERT INTO empleado
                (
                    nombre,
                    cargo,
                    telefono,
                    email,
                    fecha_contratacion
                )
                VALUES
                (
                    '$nombre',
                    '$cargo',
                    '$telefono',
                    '$email',
                    '$fechaContratacion'
                )";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Actualizar un empleado.
    public static function actualizar(
        $id,
        $nombre,
        $cargo,
        $telefono,
        $email,
        $fechaContratacion
    )
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Limpiar datos.
        $nombre = $conn->real_escape_string($nombre);
        $cargo = $conn->real_escape_string($cargo);
        $telefono = $conn->real_escape_string($telefono);
        $email = $conn->real_escape_string($email);
        $fechaContratacion = $conn->real_escape_string($fechaContratacion);

        // Consulta SQL.
        $sql = "UPDATE empleado
                SET
                    nombre = '$nombre',
                    cargo = '$cargo',
                    telefono = '$telefono',
                    email = '$email',
                    fecha_contratacion = '$fechaContratacion'
                WHERE id_empleado = $id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Eliminar un empleado.
    public static function eliminar($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "DELETE FROM empleado
                WHERE id_empleado = $id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }
}