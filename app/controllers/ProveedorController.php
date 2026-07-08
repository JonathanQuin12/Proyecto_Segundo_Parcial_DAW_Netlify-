<?php

// Se importa el modelo Proveedor.
require_once __DIR__ . "/../models/Proveedor.php";

// Controlador encargado de manejar las operaciones
// relacionadas con los proveedores.

class ProveedorController
{

    // Mostrar listado de proveedores.
    public function listar()
    {
        // Obtener todos los proveedores desde el modelo.
        $proveedores = Proveedor::obtenerTodos();

        // Cargar vista.
        require __DIR__ . "/../views/Proveedores/listarproveedores.php";
    }


    // Mostrar formulario de creación.
    public function crearForm()
    {
        // Cargar vista del formulario.
        require __DIR__ . "/../views/Proveedores/crearproveedores.php";
    }


    // Guardar un nuevo proveedor.
    public function crear()
    {

        // Obtener datos enviados por POST.
        $nombre = trim($_POST["nombre"] ?? "");
        $telefono = trim($_POST["telefono"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $direccion = trim($_POST["direccion"] ?? "");


        // Validación básica del servidor.
        if (
            $nombre === "" ||
            $telefono === "" ||
            $email === "" ||
            $direccion === "" ||
            !filter_var($email, FILTER_VALIDATE_EMAIL)
        ) { 

            header("Location: index.php?url=proveedores/crearForm&error=1");
            exit;
        }


        // Registrar proveedor.
        Proveedor::crear(
            $nombre,
            $telefono,
            $email,
            $direccion
        );


        // Regresar al listado.
        header("Location: index.php?url=proveedores/listar");
        exit;
    }



    // Mostrar formulario de edición.
    public function editarForm()
    {

        // Obtener ID enviado por URL.
        $id = $_GET["id"] ?? 0;


        // Buscar proveedor.
        $proveedor = Proveedor::obtenerPorId($id);


        // Cargar vista.
        require __DIR__ . "/../views/Proveedores/editarproveedores.php";
    }




    // Actualizar proveedor.
    public function actualizar()
    {

        // Obtener datos enviados.
        $id = $_POST["id"] ?? 0;
        $nombre = trim($_POST["nombre"] ?? "");
        $telefono = trim($_POST["telefono"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $direccion = trim($_POST["direccion"] ?? "");



        // Validación.
        if (
            $nombre === "" ||
            $telefono === "" ||
            $email === "" ||
            $direccion === "" ||
            !filter_var($email, FILTER_VALIDATE_EMAIL)
        ) {

            header(
                "Location: index.php?url=proveedores/editarForm&id=".$id."&error=1"
            );

            exit;
        }



        // Actualizar proveedor.
        Proveedor::actualizar(
            $id,
            $nombre,
            $telefono,
            $email,
            $direccion
        );


        // Regresar.
        header("Location: index.php?url=proveedores/listar");
        exit;

    }




    // Eliminar proveedor.
    public function eliminar()
    {

    $id = $_GET["id"] ?? 0;
    if($id <= 0){

        header("Location: index.php?url=proveedores/listar");
        exit;

    }

    Proveedor::eliminar($id);
    header("Location: index.php?url=proveedores/listar");
    exit;
    }
}