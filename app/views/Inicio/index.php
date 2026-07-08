<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Restaurante SABORÈ</title>
</head>

<body>

<header class="navbar">

    <div class="logo-area">

        <img src="img/logo.png" alt="Logo Restaurante SABORÈ" class="logo">

        <div>

            <h1>Restaurante SABORÈ</h1>

            <p>Sistema Web de Gestión Administrativa</p>

        </div>

    </div>

</header>

<section class="hero">

    <h2>Bienvenido</h2>

    <p>

        Administre de manera sencilla toda la información del restaurante.
        Seleccione un módulo para comenzar.

    </p>

</section>

<section class="panel">

    <a href="index.php?url=clientes/listar" class="card-menu">

        <i class="bi bi-people-fill"></i>

        <h3>Clientes</h3>

        <span>Administrar clientes registrados.</span>

    </a>

    <a href="index.php?url=pedidos/listar" class="card-menu">

        <i class="bi bi-journal-text"></i>

        <h3>Pedidos</h3>

        <span>Registrar y consultar pedidos.</span>

    </a>

    <a href="index.php?url=productos/listar" class="card-menu">

        <i class="bi bi-cup-hot-fill"></i>

        <h3>Productos</h3>

        <span>Gestionar el menú del restaurante.</span>

    </a>

    <a href="index.php?url=categorias/listar" class="card-menu">

        <i class="bi bi-grid-fill"></i>

        <h3>Categorías</h3>

        <span>Organizar los productos disponibles.</span>

    </a>

    <a href="index.php?url=proveedores/listar" class="card-menu">

        <i class="bi bi-truck"></i>

        <h3>Proveedores</h3>

        <span>Control de proveedores del negocio.</span>

    </a>

    <a href="index.php?url=compras/listar" class="card-menu">

        <i class="bi bi-cart-fill"></i>

        <h3>Compras</h3>

        <span>Registrar compras realizadas.</span>

    </a>

    <a href="index.php?url=empleados/listar" class="card-menu">

        <i class="bi bi-person-badge-fill"></i>

        <h3>Empleados</h3>

        <span>Administrar el personal.</span>

    </a>

    <a href="index.php?url=ventas/listar" class="card-menu">

        <i class="bi bi-cash-stack"></i>

        <h3>Ventas</h3>

        <span>Consultar y registrar ventas.</span>

    </a>

</section>

<footer class="footer">

    <p>© <?php echo date("Y"); ?> Restaurante SABORÈ</p>

    <span>Buenos momentos, mejores sabores.</span>

</footer>

<script src="js/scripts.js"></script>

</body>

</html>