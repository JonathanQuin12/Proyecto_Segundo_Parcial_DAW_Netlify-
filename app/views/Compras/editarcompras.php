<?php
$compra = $compra ?? null;
$proveedores = $proveedores ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar Compra</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">

        <h1>Editar Compra</h1>


        <?php if (!$compra): ?>

            <p>La compra no existe.</p>

            <a href="index.php?url=compras/listar">
                Volver
            </a>

            <br>

            <a href="index.php">
                Inicio
            </a>


        <?php else: ?>


            <form method="POST"
                  action="index.php?url=compras/actualizar"
                  onsubmit="return validarCompra()">


                <input type="hidden"
                       name="id"
                       value="<?= htmlspecialchars($compra["id_compra"]) ?>">


                <label>Proveedor:</label>

                <select name="id_proveedor" required>

                    <?php foreach ($proveedores as $proveedor): ?>

                        <option value="<?= htmlspecialchars($proveedor["id_proveedor"]) ?>"
                            <?= ($proveedor["id_proveedor"] == $compra["id_proveedor"]) ? "selected" : "" ?>>

                            <?= htmlspecialchars($proveedor["nombre"]) ?>

                        </option>

                    <?php endforeach; ?>

                </select>


                <label>Fecha de Compra:</label>

                <input type="date"
                       name="fecha_compra"
                       value="<?= htmlspecialchars($compra["fecha_compra"]) ?>"
                       required>


                <label>Total:</label>

                <input type="number"
                       name="total"
                       step="0.01"
                       min="0.01"
                       value="<?= htmlspecialchars($compra["total"]) ?>"
                       required>


                <button type="submit">
                    Actualizar
                </button>


            </form>


        <a class="btn-volver" href="index.php?url=compras/listar">
        Regresar
        </a>

        <a class="btn-inicio" href="index.php?url=inicio">
        Inicio
        </a>

        <?php endif; ?>


    </div>

</div>


<script src="js/scripts.js"></script>

</body>

</html>