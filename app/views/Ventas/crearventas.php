<?php
$empleados = $empleados ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta - Sabores Restaurante</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div class="formulario-centro">

<div class="formulario">

<h1>Registrar nueva venta</h1>

<?php if(isset($_GET["error"])): ?>

<p class="alerta-error">
    Todos los campos son obligatorios y el total debe ser mayor a 0.
</p>

<?php endif; ?>


<form method="POST"
      action="index.php?url=ventas/guardar"
      onsubmit="return validarVenta()">


<div class="campo">

<label>Empleado:</label>

<select name="id_empleado" required>

<option value="">Seleccione un empleado...</option>

<?php foreach($empleados as $e): ?>

<option value="<?= htmlspecialchars($e["id_empleado"]) ?>">
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
       placeholder="0.00"
       required>

</div>


<button class="btn" type="submit">
Guardar
</button>


<a class="btn-cancelar"
   href="index.php?url=ventas/listar">
Cancelar
</a>

<br>

<a class="btn-volver" href="index.php">
Volver a Inicio
</a>


</form>

</div>

</div>

<script src="js/scripts.js"></script>

</body>

</html>