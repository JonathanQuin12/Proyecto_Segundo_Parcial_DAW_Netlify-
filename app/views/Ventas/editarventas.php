<?php
$venta = $venta ?? null;
$empleados = $empleados ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta - Sabores Restaurante</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div class="formulario-centro">

<div class="formulario">

<h1>Editar venta</h1>

<?php if(!$venta): ?>

<p>No existe la venta.</p>

<a href="index.php?url=ventas/listar">
Volver
</a>

<br>

<a href="index.php">
Inicio
</a>

<?php else: ?>


<form method="POST"
      action="index.php?url=ventas/actualizar"
      onsubmit="return validarVenta()">


<input type="hidden"
       name="id"
       value="<?= htmlspecialchars($venta["id_venta"]) ?>">


<div class="campo">

<label>Empleado:</label>

<select name="id_empleado" required>

<option value="">Seleccione un empleado...</option>

<?php foreach($empleados as $e): ?>

<option value="<?= htmlspecialchars($e["id_empleado"]) ?>"
<?= ($e["id_empleado"] == $venta["id_empleado"]) ? "selected" : "" ?>>

<?= htmlspecialchars($e["nombre"]) ?> - <?= htmlspecialchars($e["cargo"]) ?>

</option>

<?php endforeach; ?>

</select>

</div>


<div class="campo">

<label>Total ($):</label>

<input type="number"
       name="total"
       step="0.01"
       min="0.01"
       value="<?= htmlspecialchars($venta["total"]) ?>"
       required>

</div>


<button class="btn" type="submit">
Actualizar
</button>


<a class="btn-cancelar"
   href="index.php?url=ventas/listar">
Cancelar
</a>

<a class="btn-volver" href="index.php">
Volver a Inicio
</a>

</form>


<?php endif; ?>

</div>

</div>

<script src="js/scripts.js"></script>

</body>

</html>