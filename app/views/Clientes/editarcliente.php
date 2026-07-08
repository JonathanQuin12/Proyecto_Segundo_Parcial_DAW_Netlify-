<?php

// Si la variable $cliente no existe, se asigna null.
$cliente = $cliente ?? null;

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Editar Cliente</title>

</head>

<body>


<div class="formulario-centro">

    <div class="formulario">


        <h1>Editar Cliente</h1>



        <?php if (!$cliente): ?>


            <p>

                El cliente no existe.

            </p>


            <a class="btn-volver"
               href="index.php?url=clientes/listar">

                Volver

            </a>



        <?php else: ?>


            <form method="POST"
                  action="index.php?url=clientes/actualizar"
                  onsubmit="return validarCliente()">



                <input type="hidden"
                       name="id"
                       value="<?= htmlspecialchars($cliente["id_cliente"]) ?>">



                <label>Nombre:</label>

                <input type="text"
                       name="nombre"
                       value="<?= htmlspecialchars($cliente["nombre"]) ?>"
                       required>



                <label>Teléfono:</label>

                <input type="text"
                       name="telefono"
                       value="<?= htmlspecialchars($cliente["telefono"]) ?>"
                       required>



                <label>Correo:</label>

                <input type="email"
                       name="email"
                       value="<?= htmlspecialchars($cliente["email"]) ?>"
                       required>



                <label>Dirección:</label>

                <input type="text"
                       name="direccion"
                       value="<?= htmlspecialchars($cliente["direccion"]) ?>"
                       required>



                <label>Fecha de Registro:</label>

                <input type="date"
                       name="fecha_registro"
                       value="<?= htmlspecialchars($cliente["fecha_registro"]) ?>"
                       required>



                <button type="submit">

                    Actualizar

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



        <?php endif; ?>


    </div>

</div>


<script src="js/scripts.js"></script>


</body>

</html>