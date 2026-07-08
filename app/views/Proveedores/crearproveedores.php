<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Crear Proveedor</title>

</head>

<body>


<div class="formulario-centro">


    <div class="formulario">


        <h1>Crear Proveedor</h1>



        <form method="POST"
              action="index.php?url=proveedores/crear"
              onsubmit="return validarProveedor()">



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




            <button type="submit">

                Guardar

            </button>



        </form>




        <a class="btn-volver" href="index.php?url=proveedores/listar">

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