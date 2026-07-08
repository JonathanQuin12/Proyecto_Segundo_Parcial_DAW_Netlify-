<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Crear Categoría</title>

</head>

<body>


<div class="formulario-centro">

    <div class="formulario">


        <h1>Crear Categoría</h1>


        <form method="POST"
              action="index.php?url=categorias/crear"
              onsubmit="return validarCategoria()">


            <label>Nombre:</label>

            <input type="text"
                   name="nombre"
                   required>


            <label>Descripción:</label>

            <textarea name="descripcion"></textarea>


            <button type="submit">

                Guardar

            </button>


        </form>


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