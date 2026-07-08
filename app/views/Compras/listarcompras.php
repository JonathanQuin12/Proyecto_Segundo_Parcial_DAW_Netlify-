<?php
$compras = $compras ?? [];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Listado de Compras</title>

</head>

<body>

<div class="contenedor">

    <div class="card">

        <h1>Listado de Compras</h1>

        <a class="btn-crear" href="index.php?url=compras/crearForm">
            Crear Compra
        </a>

        <a class="btn-inicio" href="index.php?url=inicio">
            Inicio
        </a>

        <table class="tabla">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Proveedor</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

            <?php foreach ($compras as $compra): ?>

                <tr>

                    <td><?= htmlspecialchars($compra["id_compra"]) ?></td>

                    <td><?= htmlspecialchars($compra["nombre_proveedor"]) ?></td>

                    <td><?= htmlspecialchars($compra["fecha_compra"]) ?></td>

                    <td>$<?= number_format($compra["total"], 2) ?></td>

                    <td>

                        <a class="btn-editar"
                           href="index.php?url=compras/editarForm&id=<?= $compra["id_compra"] ?>">
                            Editar
                        </a>

                        <a class="btn-eliminar"
                           href="index.php?url=compras/eliminar&id=<?= $compra["id_compra"] ?>"
                           onclick="return confirm('¿Desea eliminar esta compra?')">
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<script src="js/scripts.js"></script>

</body>
</html>