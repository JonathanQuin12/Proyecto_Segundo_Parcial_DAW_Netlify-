<?php

$categoria = $categoria ?? null;

?>


<!DOCTYPE html>

<html lang="es">


<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/styles.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title>Editar Categoría</title>


</head>


<body>


<div class="formulario-centro">


    <div class="formulario">


        <h1>Editar Categoría</h1>



        <?php if(!$categoria): ?>


            <p class="mensaje-error">

                La categoría no existe.

            </p>



            <a class="btn-volver"
               href="index.php?url=inicio">


                <i class="bi bi-house-fill"></i>

                Volver al Inicio


            </a>



        <?php else: ?>



            <form method="POST"
                  action="index.php?url=categorias/actualizar"
                  onsubmit="return validarCategoria()">



                <input type="hidden"
                       name="id"
                       value="<?= htmlspecialchars($categoria["id_categoria"]) ?>">



                <label>

                    Nombre:

                </label>



                <input type="text"
                       name="nombre"
                       value="<?= htmlspecialchars($categoria["nombre"]) ?>"
                       required>




                <label>

                    Descripción:

                </label>



                <textarea name="descripcion"><?= htmlspecialchars($categoria["descripcion"]) ?></textarea>




                <button type="submit">


                    <i class="bi bi-save"></i>

                    Actualizar


                </button>



            </form>





            <a class="btn-volver"
               href="index.php?url=categorias/listar">


                <i class="bi bi-arrow-left"></i>

                Volver a Categorías


            </a>





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