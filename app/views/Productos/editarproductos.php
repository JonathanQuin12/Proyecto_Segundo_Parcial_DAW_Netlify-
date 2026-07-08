<?php
$producto = $producto ?? null;
$categorias = $categorias ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar Producto</title>
</head>

<body>


<div class="formulario-centro">

    <div class="formulario">


        <h1>Editar Producto</h1>



        <?php if (!$producto): ?>


            <p>El producto no existe.</p>


            <a href="index.php?url=productos/listar">
                Volver
            </a>

            <br>

            <a href="index.php">
                Inicio
            </a>



        <?php else: ?>



        <form method="POST"
              action="index.php?url=productos/actualizar"
              onsubmit="return validarProducto()">



            <input type="hidden"
                   name="id"
                   value="<?= htmlspecialchars($producto["id_producto"]) ?>">



            <label>Categoría:</label>


            <select name="id_categoria" required>


                <?php foreach ($categorias as $c): ?>


                    <option value="<?= $c["id_categoria"] ?>"
                    <?= $producto["id_categoria"] == $c["id_categoria"] ? "selected" : "" ?>>


                        <?= htmlspecialchars($c["nombre"]) ?>


                    </option>


                <?php endforeach; ?>


            </select>




            <label>Nombre:</label>


            <input type="text"
                   name="nombre"
                   value="<?= htmlspecialchars($producto["nombre"]) ?>"
                   required>




            <label>Descripción:</label>


            <input type="text"
                   name="descripcion"
                   value="<?= htmlspecialchars($producto["descripcion"]) ?>">





            <label>Precio:</label>


            <input type="number"
                   name="precio"
                   step="0.01"
                   value="<?= htmlspecialchars($producto["precio"]) ?>"
                   required>





            <label>Stock:</label>


            <input type="number"
                   name="stock"
                   value="<?= htmlspecialchars($producto["stock"]) ?>"
                   required>





            <button type="submit">
                Actualizar
            </button>



        </form>


        <a class="btn-volver" href="index.php?url=productos/listar">
            Regresar
        </a>

        <br>

        <a href="index.php">
            Volver a Inicio
        </a>




        <?php endif; ?>



    </div>

</div>


<script src="js/scripts.js"></script>


</body>

</html>