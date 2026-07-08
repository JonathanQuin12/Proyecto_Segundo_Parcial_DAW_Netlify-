<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crear Empleado</title>
</head>

<body>

<div class="formulario-centro">

    <div class="formulario">

        <h1>Crear Empleado</h1>

        <form method="POST"
              action="index.php?url=empleados/crear"
              onsubmit="return validarEmpleado()">

            <label>Nombre:</label>
            <input type="text"
                   name="nombre"
                   required>


            <label>Cargo:</label>
            <input type="text"
                   name="cargo"
                   required>


            <label>Teléfono:</label>
            <input type="text"
                   name="telefono"
                   required>


            <label>Correo:</label>
            <input type="email"
                   name="email"
                   required>


            <label>Fecha de Contratación:</label>
            <input type="date"
                   name="fecha_contratacion"
                   required>


            <button type="submit">
                Guardar
            </button>

        </form>


        <a class="btn-volver" href="index.php?url=empleados/listar">Volver</a>
        <br>
        <a class="btn-volver"
           href="index.php?url=inicio">

            <i class="bi bi-house-fill"></i>

            Volver al Inicio

        </a>


    </div>

</div>


<script src="js/scripts.js"></script>

</body>

</html>