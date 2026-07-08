<?php
$proveedores = $proveedores ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crear Compra</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">

        <h1>Crear Compra</h1>

        <form method="POST"
              action="index.php?url=compras/crear"
              onsubmit="return validarCompra()">

            <label>Proveedor:</label>

            <select name="id_proveedor" required>

                <option value="">Seleccione un proveedor</option>

                <?php foreach ($proveedores as $proveedor): ?>

                    <option value="<?= htmlspecialchars($proveedor["id_proveedor"]) ?>">
                        <?= htmlspecialchars($proveedor["nombre"]) ?>
                    </option>

                <?php endforeach; ?>

            </select>


            <label>Fecha de Compra:</label>

            <input type="date"
                   name="fecha_compra"
                   required>


            <label>Total:</label>

            <input type="number"
                   name="total"
                   step="0.01"
                   min="0.01"
                   required>


            <button type="submit">
                Guardar
            </button>

        </form>


        <a class="btn-volver" href="index.php?url=compras/listar">
        Regresar
        </a>

        <a class="btn-inicio" href="index.php?url=inicio">
        Inicio
        </a>

    </div>

</div>

<script src="js/scripts.js"></script>

</body>

</html>