<?php
// Clase Compra que maneja las operaciones CRUD de la tabla compra.

// Se importa la clase Conexion para conectarse a la base de datos.
require_once __DIR__ . "/../../config/conexion.php";

class Compra
{

    // Obtiene todas las compras registradas.
    public static function obtenerTodos()
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Consulta SQL.
        $sql = "SELECT
                    compra.id_compra,
                    compra.id_proveedor,
                    proveedor.nombre AS nombre_proveedor,
                    compra.fecha_compra,
                    compra.total
                FROM compra
                INNER JOIN proveedor
                    ON compra.id_proveedor = proveedor.id_proveedor
                ORDER BY compra.id_compra ASC";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Arreglo donde se almacenarán las compras.
        $compras = [];

        // Recorrer cada registro.
        while ($fila = $resultado->fetch_assoc()) {
            $compras[] = $fila;
        }

        // Retornar arreglo.
        return $compras;
    }

    // Obtiene una compra según su ID.
    public static function obtenerPorId($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "SELECT * FROM compra
                WHERE id_compra = $id
                LIMIT 1";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Retornar la compra encontrada.
        return $resultado->fetch_assoc();
    }

    // Obtiene todos los proveedores registrados.
    public static function obtenerProveedores()
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Consulta SQL.
        $sql = "SELECT
                    id_proveedor,
                    nombre
                FROM proveedor
                ORDER BY nombre";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Arreglo donde se almacenarán los proveedores.
        $proveedores = [];

        // Recorrer registros.
        while ($fila = $resultado->fetch_assoc()) {
            $proveedores[] = $fila;
        }

        // Retornar arreglo.
        return $proveedores;
    }

    // Registrar una nueva compra.
    public static function crear($idProveedor, $fechaCompra, $total)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Limpiar datos.
        $idProveedor = (int)$idProveedor;
        $fechaCompra = $conn->real_escape_string($fechaCompra);
        $total = $conn->real_escape_string($total);

        // Consulta SQL.
        $sql = "INSERT INTO compra
                (
                    id_proveedor,
                    fecha_compra,
                    total
                )
                VALUES
                (
                    '$idProveedor',
                    '$fechaCompra',
                    '$total'
                )";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Actualizar una compra.
    public static function actualizar($id, $idProveedor, $fechaCompra, $total)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir IDs a enteros.
        $id = (int)$id;
        $idProveedor = (int)$idProveedor;

        // Limpiar datos.
        $fechaCompra = $conn->real_escape_string($fechaCompra);
        $total = $conn->real_escape_string($total);

        // Consulta SQL.
        $sql = "UPDATE compra
                SET
                    id_proveedor = '$idProveedor',
                    fecha_compra = '$fechaCompra',
                    total = '$total'
                WHERE id_compra = $id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Eliminar una compra.
    public static function eliminar($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir el ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "DELETE FROM compra
                WHERE id_compra = $id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }
}