<?php

require_once __DIR__ . "/../../config/conexion.php";

class Categoria
{

    public static function obtenerTodos()
    {
        $conn = Conexion::conectar();
        $sql = "SELECT 
                    id_categoria,
                    nombre,
                    descripcion
                FROM categoria
                ORDER BY id_categoria DESC";

        $resultado = $conn->query($sql);
        $categorias = [];


        if ($resultado && $resultado->num_rows > 0) {

            while ($fila = $resultado->fetch_assoc()) {

                $categorias[] = $fila;
            }
        }
        return $categorias;
    }

    public static function obtenerPorId($id)
    {
        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "SELECT id_categoria, nombre, descripcion
             FROM categoria
             WHERE id_categoria = ?"
        );


        $stmt->bind_param("i",$id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public static function crear($nombre,$descripcion)
    {
        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "INSERT INTO categoria
            (nombre, descripcion)
            VALUES (?, ?)"
        );

        $stmt->bind_param(
            "ss",
            $nombre,
            $descripcion
        );

        $stmt->execute();
        $stmt->close();
    }

    public static function actualizar($id,$nombre,$descripcion)
    {
        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "UPDATE categoria
             SET nombre = ?,
                 descripcion = ?
             WHERE id_categoria = ?"
        );

        $stmt->bind_param(
            "ssi",
            $nombre,
            $descripcion,
            $id
        );

        $stmt->execute();
        $stmt->close();
    }

    public static function eliminar($id)
    {
        $conn = Conexion::conectar();


        $stmt = $conn->prepare(
            "DELETE FROM categoria
             WHERE id_categoria = ?"
        );

        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

}