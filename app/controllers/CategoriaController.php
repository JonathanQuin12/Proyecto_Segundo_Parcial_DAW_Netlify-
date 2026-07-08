<?php

require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController
{
    public function listar()
    {
        $categorias = Categoria::obtenerTodos();

        require __DIR__ . "/../views/Categorias/listarcategoria.php";
    }

    public function crearForm()
    {
        require __DIR__ . "/../views/Categorias/crearcategoria.php";
    }
    public function crear()
    {
        $nombre = trim($_POST["nombre"] ?? "");
        $descripcion = trim($_POST["descripcion"] ?? "");

        if ($nombre === "") {

            header("Location: index.php?url=categorias/crearForm&error=1");
            exit;
        }

        Categoria::crear(
            $nombre,
            $descripcion
        );

        header("Location: index.php?url=categorias/listar&msg=ok");
        exit;
    }
    public function editarForm()
    {
        $id = $_GET["id"] ?? 0;

        if ($id <= 0) {

            header("Location: index.php?url=categorias/listar");
            exit;
        }
        $categoria = Categoria::obtenerPorId($id);
        require __DIR__ . "/../views/Categorias/editarcategoria.php";
    }

    public function actualizar()
    {
        $id = $_POST["id"] ?? 0;
        $nombre = trim($_POST["nombre"] ?? "");
        $descripcion = trim($_POST["descripcion"] ?? "");

        if ($id <= 0 || $nombre === "") {

            header(
                "Location: index.php?url=categorias/editarForm&id=".$id."&error=1"
            );

            exit;
        }
        Categoria::actualizar(
            $id,
            $nombre,
            $descripcion
        );

        header("Location: index.php?url=categorias/listar&msg=ok");
        exit;
    }

    public function eliminar()
    {
        $id = $_GET["id"] ?? 0;
        if ($id > 0) {

            Categoria::eliminar($id);
        }

        header("Location: index.php?url=categorias/listar&msg=ok");
        exit;
    }

}