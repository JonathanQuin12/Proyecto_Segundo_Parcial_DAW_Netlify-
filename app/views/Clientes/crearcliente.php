<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Crear Cliente</title>

</head>

<body>


<div class="formulario-centro">

    <div class="formulario">


        <h1>Crear Cliente</h1>


        <form method="POST"
              action="index.php?url=clientes/crear"
              onsubmit="return validarCliente()">



            <label>Nombre:</label>

            <input type="text"
                   name="nombre"
                   required>



            <label>Teléfono:</label>

            <input type="text"
                   name="telefono"
                   required>



            <label>Correo:</label>

            <input type="email"
                   name="email"
                   required>



            <label>Dirección:</label>

            <input type="text"
                   name="direccion"
                   required>



            <label>Fecha de Registro:</label>

            <input type="date"
                   name="fecha_registro"
                   required>



            <button type="submit">

                Guardar

            </button>


        </form>



        <a class="btn-volver"
           href="index.php?url=clientes/listar">

            Volver

        </a>


        <br>


        <a class="btn-volver"
           href="index.php?url=inicio">

            Volver al Inicio

        </a>


    </div>

</div>


<script src="js/scripts.js"></script>


</body>

</html>