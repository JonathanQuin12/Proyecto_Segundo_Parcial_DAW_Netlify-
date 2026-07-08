<?php
// Se importa el modelo Pedido.
require_once __DIR__ . '/../models/Pedido.php';

// Este controlador maneja las solicitudes relacionadas con los pedidos.
// Permite listar, crear, editar y eliminar pedidos.

class PedidoController
{

    // Obtiene todos los pedidos.
    public function listar()
    {
        // Llama al modelo.
        $pedidos = Pedido::obtenerTodos();

        // Carga la vista.
        require __DIR__ . "/../views/Pedidos/listarpedido.php";
    }

    // Mostrar formulario de registro.
    public function crearForm()
    {
        // Carga la vista.
        require __DIR__ . "/../views/Pedidos/crearpedido.php";
    }

    // Registrar un pedido.
    public function crear()
    {
        // Obtener datos enviados por el formulario.
        $id_cliente = $_POST["id_cliente"] ?? "";
        $fecha_pedido = $_POST["fecha_pedido"] ?? "";
        $estado = $_POST["estado"] ?? "";

        // Registrar pedido.
        Pedido::crear($id_cliente, $fecha_pedido, $estado);

        // Volver al listado.
        header("Location: index.php?url=pedidos/listar");
        exit;
    }

    // Mostrar formulario de edición.
    public function editarForm()
    {
        // Obtener ID.
        $id = $_GET["id"] ?? 0;

        // Buscar pedido.
        $pedido = Pedido::obtenerPorId($id);

        // Cargar vista.
        require __DIR__ . "/../views/Pedidos/editarpedido.php";
    }

    // Actualizar pedido.
    public function actualizar()
    {
        // Obtener datos del formulario.
        $id = $_POST["id"] ?? 0;
        $id_cliente = $_POST["id_cliente"] ?? "";
        $fecha_pedido = $_POST["fecha_pedido"] ?? "";
        $estado = $_POST["estado"] ?? "";

        // Actualizar pedido.
        Pedido::actualizar($id, $id_cliente, $fecha_pedido, $estado);

        // Volver al listado.
        header("Location: index.php?url=pedidos/listar");
        exit;
    }

    // Eliminar pedido.
    public function eliminar()
    {
        // Obtener ID.
        $id = $_GET["id"] ?? 0;

        // Eliminar pedido.
        Pedido::eliminar($id);

        // Volver al listado.
        header("Location: index.php?url=pedidos/listar");
        exit;
    }
}