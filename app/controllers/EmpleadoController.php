<?php
// Se importa el modelo Empleado para poder utilizar sus métodos.
require_once __DIR__ . '/../models/Empleado.php';

// Este controlador maneja las solicitudes relacionadas con los empleados.
// Permite listar, crear, actualizar y eliminar empleados.

class EmpleadoController
{

    // Obtiene todos los empleados y carga la vista de listado.
    public function listar()
    {
        // Llama al método obtenerTodos() del modelo Empleado.
        $empleados = Empleado::obtenerTodos();

        // Carga la vista donde se muestran todos los empleados.
        require __DIR__ . "/../views/Empleados/listarempleados.php";
    }

    // Muestra el formulario para registrar un nuevo empleado.
    public function crearForm()
    {
        // Carga la vista del formulario de creación.
        require __DIR__ . "/../views/Empleados/crearempleados.php";
    }

    // Guarda un nuevo empleado.
    public function crear()
    {
        // Obtener los datos enviados desde el formulario.
        $nombre = $_POST["nombre"] ?? "";
        $cargo = $_POST["cargo"] ?? "";
        $telefono = $_POST["telefono"] ?? "";
        $email = $_POST["email"] ?? "";
        $fechaContratacion = $_POST["fecha_contratacion"] ?? "";

        // Registrar el empleado.
        Empleado::crear(
            $nombre,
            $cargo,
            $telefono,
            $email,
            $fechaContratacion
        );

        // Regresar al listado.
        header("Location: index.php?url=empleados/listar");
        exit;
    }

    // Muestra el formulario para editar un empleado.
    public function editarForm()
    {
        // Obtener el ID enviado por la URL.
        $id = $_GET["id"] ?? 0;

        // Buscar el empleado por su ID.
        $empleado = Empleado::obtenerPorId($id);

        // Cargar la vista de edición.
        require __DIR__ . "/../views/Empleados/editarempleados.php";
    }

    // Actualiza la información de un empleado.
    public function actualizar()
    {
        // Obtener los datos enviados desde el formulario.
        $id = $_POST["id"] ?? 0;
        $nombre = $_POST["nombre"] ?? "";
        $cargo = $_POST["cargo"] ?? "";
        $telefono = $_POST["telefono"] ?? "";
        $email = $_POST["email"] ?? "";
        $fechaContratacion = $_POST["fecha_contratacion"] ?? "";

        // Actualizar el empleado.
        Empleado::actualizar(
            $id,
            $nombre,
            $cargo,
            $telefono,
            $email,
            $fechaContratacion
        );

        // Regresar al listado.
        header("Location: index.php?url=empleados/listar");
        exit;
    }

    // Elimina un empleado según el ID recibido.
    public function eliminar()
    {
        // Obtener el ID.
        $id = $_GET["id"] ?? 0;

        // Eliminar el empleado.
        Empleado::eliminar($id);

        // Regresar al listado.
        header("Location: index.php?url=empleados/listar");
        exit;
    }
}