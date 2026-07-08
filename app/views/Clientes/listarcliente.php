<?php

// Si la variable no existe, se crea un arreglo vacío.
$clientes = $clientes ?? [];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Listado de Clientes</title>

</head>


<body>



<div class="contenedor">

    <div class="card">



        <h1>Listado de Clientes</h1>



        <a class="btn-crear"
           href="index.php?url=clientes/crearForm">

            Crear Cliente

        </a>



        <a class="btn-inicio"
           href="index.php">

            Inicio

        </a>



        <table class="tabla">



            <tr>

                <th>ID</th>

                <th>Nombre</th>

                <th>Teléfono</th>

                <th>Correo</th>

                <th>Dirección</th>

                <th>Fecha Registro</th>

                <th>Acciones</th>

            </tr>



            <?php foreach ($clientes as $c): ?>



            <tr>



                <td>

                    <?= htmlspecialchars($c["id_cliente"]) ?>

                </td>



                <td>

                    <?= htmlspecialchars($c["nombre"]) ?>

                </td>



                <td>

                    <?= htmlspecialchars($c["telefono"]) ?>

                </td>



                <td>

                    <?= htmlspecialchars($c["email"]) ?>

                </td>



                <td>

                    <?= htmlspecialchars($c["direccion"]) ?>

                </td>



                <td>

                    <?= htmlspecialchars($c["fecha_registro"]) ?>

                </td>



                <td>



                    <a class="btn-editar"
                       href="index.php?url=clientes/editarForm&id=<?= $c["id_cliente"] ?>">

                        Editar

                    </a>



                    <a class="btn-eliminar"
                       href="index.php?url=clientes/eliminar&id=<?= $c["id_cliente"] ?>"
                       onclick="return confirm('¿Está seguro de eliminar este cliente?')">

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