<?php
$empleado = $empleado ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Editar Empleado</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">


        <h1>Editar Empleado</h1>


        <?php if (!$empleado): ?>


            <p>El empleado no existe.</p>


            <a href="index.php?url=empleados/listar">
                Volver
            </a>

            <br>

            <a href="index.php">
                Inicio
            </a>


        <?php else: ?>


            <form method="POST"
                  action="index.php?url=empleados/actualizar"
                  onsubmit="return validarEmpleado()">


                <input type="hidden"
                       name="id"
                       value="<?= htmlspecialchars($empleado["id_empleado"]) ?>">



                <label>Nombre:</label>

                <input type="text"
                       name="nombre"
                       value="<?= htmlspecialchars($empleado["nombre"]) ?>"
                       required>



                <label>Cargo:</label>

                <input type="text"
                       name="cargo"
                       value="<?= htmlspecialchars($empleado["cargo"]) ?>"
                       required>



                <label>Teléfono:</label>

                <input type="text"
                       name="telefono"
                       value="<?= htmlspecialchars($empleado["telefono"]) ?>"
                       required>



                <label>Correo:</label>

                <input type="email"
                       name="email"
                       value="<?= htmlspecialchars($empleado["email"]) ?>"
                       required>



                <label>Fecha de Contratación:</label>

                <input type="date"
                       name="fecha_contratacion"
                       value="<?= htmlspecialchars($empleado["fecha_contratacion"]) ?>"
                       required>



                <button type="submit">
                    Actualizar
                </button>


            </form>


        <a class="btn-volver" href="index.php?url=empleados/listar">Regresar</a>
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