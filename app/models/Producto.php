<?php

require_once __DIR__ . "/../../config/conexion.php";


class Producto
{
    public static function obtenerTodos()
    {
        $conn = Conexion::conectar();
        $sql = "SELECT 
                    p.id_producto,
                    c.nombre AS categoria,
                    p.nombre,
                    p.descripcion,
                    p.precio,
                    p.stock
                FROM producto p
                INNER JOIN categoria c
                ON p.id_categoria = c.id_categoria
                ORDER BY p.id_producto DESC";

        $resultado = $conn->query($sql);
        $productos = [];

        if($resultado && $resultado->num_rows > 0){

            while($fila = $resultado->fetch_assoc()){

                $productos[] = $fila;

            }
        }
        return $productos;
    }

    public static function obtenerCategorias()
    {
        $conn = Conexion::conectar();

        $sql = "SELECT id_categoria, nombre
                FROM categoria
                ORDER BY nombre ASC";

        $resultado = $conn->query($sql);
        $categorias = [];

        if($resultado && $resultado->num_rows > 0){

            while($fila = $resultado->fetch_assoc()){

                $categorias[] = $fila;

            }
        }

        return $categorias;
    }

    public static function obtenerPorId($id)
    {
        $conn = Conexion::conectar();

        $stmt = $conn->prepare(
            "SELECT id_producto,
                    id_categoria,
                    nombre,
                    descripcion,
                    precio,
                    stock
             FROM producto
             WHERE id_producto = ?"
        );


        $stmt->bind_param("i",$id);

        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function crear(
        $idCategoria,
        $nombre,
        $descripcion,
        $precio,
        $stock
    )
    {

        $conn = Conexion::conectar();
        $stmt = $conn->prepare(
            "INSERT INTO producto
            (id_categoria,nombre,descripcion,precio,stock)
            VALUES (?,?,?,?,?)"
        );

        $stmt->bind_param(
            "issdi",
            $idCategoria,
            $nombre,
            $descripcion,
            $precio,
            $stock
        );
        return $stmt->execute();

    }

    public static function actualizar(
        $id,
        $idCategoria,
        $nombre,
        $descripcion,
        $precio,
        $stock
    )
    {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare(
            "UPDATE producto
             SET id_categoria=?,
                 nombre=?,
                 descripcion=?,
                 precio=?,
                 stock=?
             WHERE id_producto=?"
        );

        $stmt->bind_param(
            "issdii",
            $idCategoria,
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $id
        );
        return $stmt->execute();

    }

    public static function eliminar($id)
    {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare(
            "DELETE FROM producto
             WHERE id_producto=?"
        );

        $stmt->bind_param("i",$id);
        return $stmt->execute();
    }
}