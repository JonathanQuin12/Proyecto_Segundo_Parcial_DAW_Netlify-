<?php
// Se importa el modelo Cliente para poder utilizar sus métodos.
require_once __DIR__ . '/../models/Cliente.php';

// Este controlador maneja las solicitudes relacionadas con los clientes.
// Proporciona métodos para listar, crear, actualizar y eliminar clientes.

class ClienteController
{

    // Obtiene todos los clientes y carga la vista de listado.
    public function listar()
    {
        // Llama al método obtenerTodos() del modelo Cliente.
        $clientes = Cliente::obtenerTodos();

        // Carga la vista donde se muestran todos los clientes.
        require __DIR__ . "/../views/Clientes/listarcliente.php";
    }

    // Muestra el formulario para registrar un nuevo cliente.
    public function crearForm()
    {
        // Carga la vista del formulario de creación.
        require __DIR__ . "/../views/Clientes/crearcliente.php";
    }

    // Guarda un nuevo cliente.
    // Recibe los datos enviados desde el formulario mediante POST.
    public function crear()
    {
        // Obtener los datos enviados desde el formulario.
        $nombre = $_POST["nombre"] ?? "";
        $telefono = $_POST["telefono"] ?? "";
        $email = $_POST["email"] ?? "";
        $direccion = $_POST["direccion"] ?? "";

        // Llama al método crear() del modelo Cliente.
        Cliente::crear($nombre, $telefono, $email, $direccion);

        // Regresa al listado de clientes.
        header("Location: index.php?url=clientes/listar");
        exit;
    }

    // Muestra el formulario para editar un cliente.
    public function editarForm()
    {
        // Obtiene el ID enviado por la URL.
        $id = $_GET["id"] ?? 0;

        // Busca el cliente por su ID.
        $cliente = Cliente::obtenerPorId($id);

        // Carga la vista de edición.
        require __DIR__ . "/../views/Clientes/editarcliente.php";
    }

    // Actualiza la información de un cliente.
    public function actualizar()
    {
        // Obtener los datos enviados desde el formulario.
        $id = $_POST["id"] ?? 0;
        $nombre = $_POST["nombre"] ?? "";
        $telefono = $_POST["telefono"] ?? "";
        $email = $_POST["email"] ?? "";
        $direccion = $_POST["direccion"] ?? "";

        // Llama al método actualizar() del modelo Cliente.
        Cliente::actualizar($id, $nombre, $telefono, $email, $direccion);

        // Regresa al listado de clientes.
        header("Location: index.php?url=clientes/listar");
        exit;
    }

    // Elimina un cliente según el ID recibido por la URL.
    public function eliminar()
    {
        // Obtener el ID.
        $id = $_GET["id"] ?? 0;

        // Llama al método eliminar() del modelo Cliente.
        Cliente::eliminar($id);

        // Regresa al listado de clientes.
        header("Location: index.php?url=clientes/listar");
        exit;
    }
}