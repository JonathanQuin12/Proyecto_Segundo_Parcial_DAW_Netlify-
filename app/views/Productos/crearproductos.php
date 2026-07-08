<?php
$categorias = $categorias ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crear Producto</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">

        <h1>Crear Producto</h1>


        <form method="POST"
              action="index.php?url=productos/crear"
              onsubmit="return validarProducto()">



            <label>Categoría:</label>

            <select name="id_categoria" required>

                <option value="">
                    Seleccione una categoría
                </option>


                <?php foreach ($categorias as $c): ?>

                    <option value="<?= $c["id_categoria"] ?>">
                        <?= htmlspecialchars($c["nombre"]) ?>
                    </option>


                <?php endforeach; ?>


            </select>



            <label>Nombre:</label>

            <input type="text"
                   name="nombre"
                   required>



            <label>Descripción:</label>

            <input type="text"
                   name="descripcion">



            <label>Precio:</label>

            <input type="number"
                   name="precio"
                   step="0.01"
                   required>



            <label>Stock:</label>

            <input type="number"
                   name="stock"
                   required>



            <button type="submit">
                Guardar
            </button>


        </form>


        <a class="btn-volver" href="index.php?url=productos/listar">
            Regresar
        </a>

        <br>

        <a class="btn-volver" href="index.php">
            Volver a Inicio
        </a>


    </div>

</div>


<script src="js/scripts.js"></script>

</body>

</html>