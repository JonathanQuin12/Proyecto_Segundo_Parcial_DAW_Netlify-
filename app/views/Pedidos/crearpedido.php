<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crear Pedido</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">

        <h1>Crear Pedido</h1>


        <form method="POST"
              action="index.php?url=pedidos/crear"
              onsubmit="return validarPedido()">



            <label>ID Cliente:</label>

            <input type="number"
                   name="id_cliente"
                   required>



            <label>Fecha del Pedido:</label>

            <input type="date"
                   name="fecha_pedido"
                   required>



            <label>Estado:</label>

            <input type="text"
                   name="estado"
                   required>



            <button type="submit">
                Guardar
            </button>


        </form>


        <a class="btn-volver" href="index.php?url=pedidos/listar">Regresar</a>
        <br>
        <a class="btn-volver"
           href="index.php?url=inicio">

            <i class="bi bi-house-fill"></i>

            Volver al Inicio

        </a>

    </div>

</div>

<script src="js/scripts.js"></script>

</body>

</html>