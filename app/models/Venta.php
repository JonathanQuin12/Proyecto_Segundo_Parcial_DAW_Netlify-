<?php

require_once __DIR__ . "/../../config/conexion.php";


class Venta
{

    // Obtener todas las ventas
    public static function obtenerTodas()
    {

        $conn = Conexion::conectar();


        $sql = "
            SELECT 
                v.id_venta,
                e.nombre AS empleado,
                v.fecha_venta,
                v.total

            FROM venta v

            INNER JOIN empleado e
            ON v.id_empleado = e.id_empleado

            ORDER BY v.id_venta DESC
        ";

        $resultado = $conn->query($sql);
        $ventas = [];


        if ($resultado) {

            while ($fila = $resultado->fetch_assoc()) {

                $ventas[] = $fila;

            }

        }
        return $ventas;
    }


    // Obtener venta por ID
    public static function obtenerPorId($id)
    {

        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "SELECT 
                id_venta,
                id_empleado,
                fecha_venta,
                total

             FROM venta

             WHERE id_venta = ?"
        );

        $stmt->bind_param(
            "i",
            $id
        );

        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();

    }

    // Guardar venta nueva
    public static function guardar($idEmpleado,$total)
    {

        $conn = Conexion::conectar();
        $stmt = $conn->prepare(
            "INSERT INTO venta
            (id_empleado,total)

            VALUES (?,?)"
        );

        $stmt->bind_param(
            "id",
            $idEmpleado,
            $total
        );
        $stmt->execute();
        $stmt->close();

    }

    // Actualizar venta
    public static function actualizar(
        $id,
        $idEmpleado,
        $total
    )
    {

        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "UPDATE venta

             SET 
                id_empleado = ?,
                total = ?

             WHERE id_venta = ?"
        );

        $stmt->bind_param(
            "idi",
            $idEmpleado,
            $total,
            $id
        );

        $stmt->execute();
        $stmt->close();
    }

    // Eliminar venta
    public static function eliminar($id)
    {

        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "DELETE FROM venta
             WHERE id_venta = ?"
        );


        $stmt->bind_param(
            "i",
            $id
        );

        $stmt->execute();
        $stmt->close();
    }
}