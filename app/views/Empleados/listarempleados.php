<?php
$empleados = $empleados ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Listado de Empleados</title>

</head>

<body>


<div class="contenedor">


    <div class="card">


        <h1>Listado de Empleados</h1>



        <a class="btn-crear"
           href="index.php?url=empleados/crearForm">

            Crear Empleado

        </a>


        <a class="btn-inicio"
           href="index.php">

            Inicio

        </a>




        <table class="tabla">


            <tr>

                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de Contratación</th>
                <th>Acciones</th>

            </tr>



            <?php foreach ($empleados as $e): ?>


            <tr>


                <td>
                    <?= htmlspecialchars($e["id_empleado"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($e["nombre"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($e["cargo"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($e["telefono"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($e["email"]) ?>
                </td>


                <td>
                    <?= htmlspecialchars($e["fecha_contratacion"]) ?>
                </td>



                <td>


                    <a class="btn-editar"
                       href="index.php?url=empleados/editarForm&id=<?= $e["id_empleado"] ?>">

                        Editar

                    </a>



                    <a class="btn-eliminar"
                       href="index.php?url=empleados/eliminar&id=<?= $e["id_empleado"] ?>"
                       onclick="return confirm('¿Está seguro de eliminar este empleado?')">

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