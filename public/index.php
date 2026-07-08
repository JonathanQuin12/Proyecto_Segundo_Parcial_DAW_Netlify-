<?php
// Front Controller
// Punto de entrada de la aplicación.

// Se importan los controladores.
require_once __DIR__ . "/../app/controllers/InicioController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/PedidoController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/EmpleadoController.php";
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/ProductoController.php";


// Se obtiene la ruta enviada por la URL.
// Si no existe ninguna ruta, muestra el inicio.
$url = $_GET["url"] ?? "inicio";


// Según la ruta recibida, se ejecuta el método correspondiente.
switch ($url) {


    //INICIO//

    case "inicio":
        $controller = new InicioController();
        $controller->index();
        break;

    //CLIENTES//

    case "clientes/listar":

        $controller = new ClienteController();
        $controller->listar();
        break;

    case "clientes/crearForm":
        $controller = new ClienteController();
        $controller->crearForm();
        break;


    case "clientes/crear":

        $controller = new ClienteController();
        $controller->crear();
        break;

    case "clientes/editarForm":
        $controller = new ClienteController();
        $controller->editarForm();
        break;

    case "clientes/actualizar":
        $controller = new ClienteController();
        $controller->actualizar();
        break;

    case "clientes/eliminar":
        $controller = new ClienteController();
        $controller->eliminar();
        break;

    //PEDIDOS//

    case "pedidos/listar":
        $controller = new PedidoController();
        $controller->listar();
        break;

    case "pedidos/crearForm":

        $controller = new PedidoController();
        $controller->crearForm();
        break;

    case "pedidos/crear":
        $controller = new PedidoController();
        $controller->crear();
        break;

    case "pedidos/editarForm":
        $controller = new PedidoController();
        $controller->editarForm();
        break;

    case "pedidos/actualizar":
        $controller = new PedidoController();
        $controller->actualizar();
        break;

    case "pedidos/eliminar":
        $controller = new PedidoController();
        $controller->eliminar();
        break;

    //PROVEEDORES//

    case "proveedores/listar":
        $controller = new ProveedorController();
        $controller->listar();
        break;

    case "proveedores/crearForm":
        $controller = new ProveedorController();
        $controller->crearForm();
        break;

    case "proveedores/crear":

        $controller = new ProveedorController();
        $controller->crear();
        break;

    case "proveedores/editarForm":
        $controller = new ProveedorController();
        $controller->editarForm();
        break;

    case "proveedores/actualizar":
        $controller = new ProveedorController();
        $controller->actualizar();
        break;

    case "proveedores/eliminar":
        $controller = new ProveedorController();
        $controller->eliminar();
        break;

    //COMPRAS//

    case "compras/listar":
        $controller = new CompraController();
        $controller->listar();
        break;

    case "compras/crearForm":
        $controller = new CompraController();
        $controller->crearForm();
        break;

    case "compras/crear":
        $controller = new CompraController();
        $controller->crear();
        break;

    case "compras/editarForm":
        $controller = new CompraController();
        $controller->editarForm();
        break;

    case "compras/actualizar":
        $controller = new CompraController();
        $controller->actualizar();
        break;

    case "compras/eliminar":
        $controller = new CompraController();
        $controller->eliminar();
        break;

    //EMPLEADOS//

    case "empleados/listar":
        $controller = new EmpleadoController();
        $controller->listar();
        break;

    case "empleados/crearForm":

        $controller = new EmpleadoController();
        $controller->crearForm();
        break;

    case "empleados/crear":
        $controller = new EmpleadoController();
        $controller->crear();
        break;

    case "empleados/editarForm":
        $controller = new EmpleadoController();
        $controller->editarForm();
        break;

    case "empleados/actualizar":
        $controller = new EmpleadoController();
        $controller->actualizar();
        break;

    case "empleados/eliminar":
        $controller = new EmpleadoController();
        $controller->eliminar();
        break;

    //VENTAS//

    case "ventas/listar":
        $controller = new VentaController();
        $controller->listar();
        break;

    case "ventas/crear":
        $controller = new VentaController();
        $controller->crear();
        break;

    case "ventas/guardar":
        $controller = new VentaController();
        $controller->guardar();
        break;

    case "ventas/editar":
        $controller = new VentaController();
        $controller->editar();
        break;

    case "ventas/actualizar":
        $controller = new VentaController();
        $controller->actualizar();
        break;

    case "ventas/eliminar":
        $controller = new VentaController();
        $controller->eliminar();
        break;

    //CATEGORIAS//

    case "categorias/listar":
       $controller = new CategoriaController();
       $controller->listar();
       break;

    case "categorias/crearForm":
       $controller = new CategoriaController();
       $controller->crearForm();
       break;

    case "categorias/crear":
       $controller = new CategoriaController();
       $controller->crear();
       break;

    case "categorias/editarForm":
       $controller = new CategoriaController();
       $controller->editarForm();
       break;

    case "categorias/actualizar":
       $controller = new CategoriaController();
       $controller->actualizar();
       break;

    case "categorias/eliminar":
       $controller = new CategoriaController();
       $controller->eliminar();
       break;


    //PRODUCTOS//

    case "productos/listar":
       $controller = new ProductoController();
       $controller->listar();
       break;

    case "productos/crearForm":
       $controller = new ProductoController();
       $controller->crearForm();
       break;

    case "productos/crear":
       $controller = new ProductoController();
       $controller->crear();
       break;

    case "productos/editarForm":
       $controller = new ProductoController();
       $controller->editarForm();
       break;

    case "productos/actualizar":
       $controller = new ProductoController();
       $controller->actualizar();
       break;

    case "productos/eliminar":
       $controller = new ProductoController();
       $controller->eliminar();
       break;

    //RUTA NO ENCONTRADA//

    default:

        http_response_code(404);

        echo "404 - Ruta no encontrada";

        break;
}