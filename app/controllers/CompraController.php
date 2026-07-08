<?php
// Se importa el modelo Compra para poder utilizar sus métodos.
require_once __DIR__ . '/../models/Compra.php';

// Este controlador maneja las solicitudes relacionadas con las compras.
// Permite listar, crear, actualizar y eliminar compras.

class CompraController
{

    // Obtiene todas las compras y carga la vista de listado.
    public function listar()
    {
        // Llama al método obtenerTodos() del modelo Compra.
        $compras = Compra::obtenerTodos();

        // Carga la vista donde se muestran todas las compras.
        require __DIR__ . "/../views/Compras/listarcompras.php";
    }

    // Muestra el formulario para registrar una nueva compra.
    public function crearForm()
    {
        // Obtener la lista de proveedores.
        $proveedores = Compra::obtenerProveedores();

        // Carga la vista del formulario.
        require __DIR__ . "/../views/Compras/crearcompras.php";
    }

    // Guarda una nueva compra.
    public function crear()
    {
        // Obtener los datos enviados desde el formulario.
        $idProveedor = $_POST["id_proveedor"] ?? 0;
        $fechaCompra = $_POST["fecha_compra"] ?? "";
        $total = $_POST["total"] ?? "";

        // Registrar la compra.
        Compra::crear($idProveedor, $fechaCompra, $total);

        // Regresar al listado.
        header("Location: index.php?url=compras/listar");
        exit;
    }

    // Muestra el formulario para editar una compra.
    public function editarForm()
    {
        // Obtener el ID enviado por la URL.
        $id = $_GET["id"] ?? 0;

        // Buscar la compra por su ID.
        $compra = Compra::obtenerPorId($id);

        // Obtener la lista de proveedores.
        $proveedores = Compra::obtenerProveedores();

        // Cargar la vista de edición.
        require __DIR__ . "/../views/Compras/editarcompras.php";
    }

    // Actualiza la información de una compra.
    public function actualizar()
    {
        // Obtener los datos enviados desde el formulario.
        $id = $_POST["id"] ?? 0;
        $idProveedor = $_POST["id_proveedor"] ?? 0;
        $fechaCompra = $_POST["fecha_compra"] ?? "";
        $total = $_POST["total"] ?? "";

        // Actualizar la compra.
        Compra::actualizar($id, $idProveedor, $fechaCompra, $total);

        // Regresar al listado.
        header("Location: index.php?url=compras/listar");
        exit;
    }

    // Elimina una compra según el ID recibido.
    public function eliminar()
    {
        // Obtener el ID.
        $id = $_GET["id"] ?? 0;

        // Eliminar la compra.
        Compra::eliminar($id);

        // Regresar al listado.
        header("Location: index.php?url=compras/listar");
        exit;
    }
}