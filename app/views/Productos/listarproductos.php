<?php
$productos = $productos ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Lista de Productos</title>

</head>

<body>


<div class="contenedor">


    <div class="card">



        <h1>Lista de Productos</h1>



        <a class="btn-crear"
           href="index.php?url=productos/crearForm">

            Crear Producto

        </a>



        <a class="btn-inicio"
           href="index.php">

            Inicio

        </a>




        <table class="tabla">



            <tr>

                <th>ID</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>

            </tr>




            <?php foreach ($productos as $p): ?>



            <tr>



                <td>
                    <?= htmlspecialchars($p["id_producto"]) ?>
                </td>



                <td>
                    <?= htmlspecialchars($p["categoria"]) ?>
                </td>



                <td>
                    <?= htmlspecialchars($p["nombre"]) ?>
                </td>



                <td>
                    <?= htmlspecialchars($p["descripcion"]) ?>
                </td>



                <td>
                    $<?= htmlspecialchars($p["precio"]) ?>
                </td>



                <td>
                    <?= htmlspecialchars($p["stock"]) ?>
                </td>




                <td>



                    <a class="btn-editar"
                       href="index.php?url=productos/editarForm&id=<?= $p["id_producto"] ?>">

                        Editar

                    </a>




                    <a class="btn-eliminar"
                       href="index.php?url=productos/eliminar&id=<?= $p["id_producto"] ?>"
                       onclick="return confirm('¿Está seguro de eliminar este producto?')">

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