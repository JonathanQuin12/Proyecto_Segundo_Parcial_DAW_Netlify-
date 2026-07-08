<?php

$proveedor = $proveedor ?? null;

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Editar Proveedor</title>

</head>


<body>


<div class="formulario-centro">


<div class="formulario">


<h1>Editar Proveedor</h1>



<?php if (!$proveedor): ?>


    <p>
        El proveedor no existe.
    </p>



    <a href="index.php?url=proveedores/listar">

        Volver

    </a>


    <br>


    <a href="index.php">

        Inicio

    </a>



<?php else: ?>



<form method="POST"
      action="index.php?url=proveedores/actualizar"
      onsubmit="return validarProveedor()">



<input type="hidden"
       name="id"
       value="<?= htmlspecialchars($proveedor["id_proveedor"]) ?>">



<label>Nombre:</label>

<input type="text"
       name="nombre"
       value="<?= htmlspecialchars($proveedor["nombre"]) ?>"
       required>




<label>Teléfono:</label>

<input type="text"
       name="telefono"
       value="<?= htmlspecialchars($proveedor["telefono"]) ?>"
       required>




<label>Correo:</label>

<input type="email"
       name="email"
       value="<?= htmlspecialchars($proveedor["email"]) ?>"
       required>




<label>Dirección:</label>

<input type="text"
       name="direccion"
       value="<?= htmlspecialchars($proveedor["direccion"]) ?>"
       required>




<button type="submit">

    Actualizar

</button>



</form>



<a class="btn-volver" href="index.php?url=proveedores/listar">

    Regresar

</a>


<br>


<a class="btn-volver" href="index.php">

    Volver a Inicio

</a>



<?php endif; ?>


</div>


</div>



<script src="js/scripts.js"></script>


</body>

</html>