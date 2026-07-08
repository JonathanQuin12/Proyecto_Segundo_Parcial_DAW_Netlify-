<?php

require_once __DIR__ . "/../models/Producto.php";

class ProductoController
{

    public function listar()
    {
        $productos = Producto::obtenerTodos();

        require __DIR__ . "/../views/Productos/listarproductos.php";
    }

    public function crearForm()
    {
        $categorias = Producto::obtenerCategorias();

        require __DIR__ . "/../views/Productos/crearproductos.php";
    }

    public function crear()
    {
        $idCategoria = $_POST["id_categoria"] ?? 0;
        $nombre = trim($_POST["nombre"] ?? "");
        $descripcion = trim($_POST["descripcion"] ?? "");
        $precio = $_POST["precio"] ?? "";
        $stock = $_POST["stock"] ?? "";


        if (
            $idCategoria == 0 ||
            $nombre === "" ||
            $precio === "" ||
            $stock === ""
        ) {

            header("Location: index.php?url=productos/crearForm&error=1");
            exit;
        }

        Producto::crear(
            $idCategoria,
            $nombre,
            $descripcion,
            $precio,
            $stock
        );

        header("Location: index.php?url=productos/listar&msg=ok");
        exit;
    }

    public function editarForm()
    {
        $id = $_GET["id"] ?? 0;
        if($id <= 0){

            header("Location: index.php?url=productos/listar");
            exit;
        }

        $producto = Producto::obtenerPorId($id);
        $categorias = Producto::obtenerCategorias();

        require __DIR__ . "/../views/Productos/editarproductos.php";
    }

    public function actualizar()
    {
        $id = $_POST["id"] ?? 0;
        $idCategoria = $_POST["id_categoria"] ?? 0;
        $nombre = trim($_POST["nombre"] ?? "");
        $descripcion = trim($_POST["descripcion"] ?? "");
        $precio = $_POST["precio"] ?? "";
        $stock = $_POST["stock"] ?? "";

        if (
            $id <= 0 ||
            $idCategoria == 0 ||
            $nombre === "" ||
            $precio === "" ||
            $stock === ""
        ){

            header(
                "Location: index.php?url=productos/editarForm&id=".$id."&error=1"
            );

            exit;
        }
        
        Producto::actualizar(
            $id,
            $idCategoria,
            $nombre,
            $descripcion,
            $precio,
            $stock
        );

        header("Location: index.php?url=productos/listar&msg=ok");
        exit;
    }

    public function eliminar()
    {
        $id = $_GET["id"] ?? 0;


        if($id > 0){

            Producto::eliminar($id);
        }

        header("Location: index.php?url=productos/listar&msg=ok");
        exit;
    }

}