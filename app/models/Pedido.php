<?php
// Clase Pedido que maneja las operaciones CRUD de la tabla pedido.

// Se importa la clase Conexion para conectarse a la base de datos.
require_once __DIR__ . "/../../config/conexion.php";

class Pedido
{
    // Obtiene todos los pedidos registrados.
    public static function obtenerTodos()
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Consulta SQL.
        $sql = "SELECT * FROM pedido";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Arreglo donde se almacenarán los pedidos.
        $pedidos = [];

        // Recorrer cada registro.
        while ($fila = $resultado->fetch_assoc()) {
            $pedidos[] = $fila;
        }

        // Retornar el arreglo.
        return $pedidos;
    }

    // Obtiene un pedido según su ID.
    public static function obtenerPorId($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "SELECT * FROM pedido WHERE id_pedido = $id LIMIT 1";

        // Ejecutar consulta.
        $resultado = $conn->query($sql);

        // Retornar pedido.
        return $resultado->fetch_assoc();
    }

    // Registrar un nuevo pedido.
    public static function crear($id_cliente, $fecha_pedido, $estado)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Limpiar datos.
        $id_cliente = (int)$id_cliente;
        $fecha_pedido = $conn->real_escape_string($fecha_pedido);
        $estado = $conn->real_escape_string($estado);

        // Consulta SQL.
        $sql = "INSERT INTO pedido(id_cliente, fecha_pedido, estado)
                VALUES('$id_cliente','$fecha_pedido','$estado')";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Actualizar un pedido.
    public static function actualizar($id, $id_cliente, $fecha_pedido, $estado)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir ID a entero.
        $id = (int)$id;
        $id_cliente = (int)$id_cliente;

        // Limpiar datos.
        $fecha_pedido = $conn->real_escape_string($fecha_pedido);
        $estado = $conn->real_escape_string($estado);

        // Consulta SQL.
        $sql = "UPDATE pedido
                SET id_cliente='$id_cliente',
                    fecha_pedido='$fecha_pedido',
                    estado='$estado'
                WHERE id_pedido=$id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }

    // Eliminar un pedido.
    public static function eliminar($id)
    {
        // Obtener conexión.
        $conn = Conexion::conectar();

        // Convertir ID a entero.
        $id = (int)$id;

        // Consulta SQL.
        $sql = "DELETE FROM pedido WHERE id_pedido=$id";

        // Ejecutar consulta.
        return $conn->query($sql);
    }
}