<?php
$pedido = $pedido ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar Pedido</title>
</head>

<body>


<div class="formulario-centro">

    <div class="formulario">


        <h1>Editar Pedido</h1>



        <?php if (!$pedido): ?>


            <p>El pedido no existe.</p>


            <a href="index.php?url=pedidos/listar">
                Volver
            </a>

            <br>

            <a href="index.php">
                Inicio
            </a>



        <?php else: ?>


            <form method="POST"
                  action="index.php?url=pedidos/actualizar"
                  onsubmit="return validarPedido()">



                <input type="hidden"
                       name="id"
                       value="<?= htmlspecialchars($pedido["id_pedido"]) ?>">



                <label>ID Cliente:</label>

                <input type="number"
                       name="id_cliente"
                       value="<?= htmlspecialchars($pedido["id_cliente"]) ?>"
                       required>



                <label>Fecha del Pedido:</label>

                <input type="date"
                       name="fecha_pedido"
                       value="<?= htmlspecialchars($pedido["fecha_pedido"]) ?>"
                       required>



                <label>Estado:</label>

                <input type="text"
                       name="estado"
                       value="<?= htmlspecialchars($pedido["estado"]) ?>"
                       required>



                <button type="submit">
                    Actualizar
                </button>



            </form>


        <a class="btn-volver" href="index.php?url=pedidos/listar">Regresar</a>
        <br>
        <a class="btn-volver"
           href="index.php?url=inicio">

            <i class="bi bi-house-fill"></i>

            Volver al Inicio

        </a>


        <?php endif; ?>


    </div>
</div>

<script src="js/scripts.js"></script>

</body>

</html>