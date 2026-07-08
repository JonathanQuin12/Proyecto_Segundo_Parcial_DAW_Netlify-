<?php

require_once __DIR__ . "/../models/Venta.php";
require_once __DIR__ . "/../models/Empleado.php";


class VentaController
{

    // Lista todas las ventas
    public function listar()
    {
        $ventas = Venta::obtenerTodas();

        require __DIR__ . "/../views/Ventas/listarventas.php";
    }



    // Formulario crear venta
    public function crear()
    {
        $empleados = Empleado::obtenerTodos();

        require __DIR__ . "/../views/Ventas/crearventas.php";
    }



    // Guardar venta
    public function guardar()
    {

        $idEmpleado = $_POST["id_empleado"] ?? "";
        $total = $_POST["total"] ?? "";


        if (
            $idEmpleado === "" ||
            $total === "" ||
            $total <= 0
        ) {

            header(
                "Location: index.php?url=ventas/crear&error=1"
            );

            exit;
        }


        Venta::guardar(
            $idEmpleado,
            $total
        );


        header(
            "Location: index.php?url=ventas/listar&msg=ok"
        );

        exit;
    }



    // Formulario editar venta
    public function editar()
    {

        $id = $_GET["id"] ?? 0;


        if ($id <= 0) {
            header("Location: index.php?url=ventas/listar");
            exit;
        }


        $venta = Venta::obtenerPorId($id);

        $empleados = Empleado::obtenerTodos();


        require __DIR__ . "/../views/Ventas/editarventas.php";
    }




    // Actualizar venta
    public function actualizar()
    {

        $id = $_POST["id"] ?? 0;
        $idEmpleado = $_POST["id_empleado"] ?? "";
        $total = $_POST["total"] ?? "";



        if (
            $id <= 0 ||
            $idEmpleado === "" ||
            $total === "" ||
            $total <= 0
        ) {

            header(
                "Location: index.php?url=ventas/editar&id=".$id."&error=1"
            );

            exit;
        }



        Venta::actualizar(
            $id,
            $idEmpleado,
            $total
        );



        header(
            "Location: index.php?url=ventas/listar&msg=ok"
        );

        exit;
    }




    // Eliminar venta
    public function eliminar()
    {

        $id = $_GET["id"] ?? 0;


        if ($id > 0) {

            Venta::eliminar($id);

        }


        header(
            "Location: index.php?url=ventas/listar&msg=ok"
        );

        exit;
    }

}