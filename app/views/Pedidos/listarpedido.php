<?php
$pedidos = $pedidos ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pedidos</title>
</head>
<body>

<div class="contenedor">
    <div class="card">

        <h1>Listado de Pedidos</h1>

        <a class="btn-crear"
           href="index.php?url=pedidos/crearForm">

            Crear Pedido

        </a>

        <a class="btn-inicio"
           href="index.php">

            Inicio

        </a>


        <table class="tabla">
            <tr>

                <th>ID</th>

                <th>ID Cliente</th>

                <th>Fecha</th>

                <th>Estado</th>

                <th>Acciones</th>

            </tr>

            <?php foreach ($pedidos as $p): ?>

            <tr>

                <td>
                    <?= htmlspecialchars($p["id_pedido"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($p["id_cliente"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($p["fecha_pedido"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($p["estado"]) ?>
                </td>


                <td>


                    <a class="btn-editar"
                       href="index.php?url=pedidos/editarForm&id=<?= $p["id_pedido"] ?>">

                        Editar

                    </a>


                    <a class="btn-eliminar"
                       href="index.php?url=pedidos/eliminar&id=<?= $p["id_pedido"] ?>"
                       onclick="return confirm('¿Desea eliminar este pedido?')">

                        Eliminar

                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>
</div>
<script src="js/scripts.js"></script>

</body>
</html>