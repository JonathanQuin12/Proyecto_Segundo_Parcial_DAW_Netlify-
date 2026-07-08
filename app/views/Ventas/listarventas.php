<?php
$ventas = $ventas ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas - Sabores Restaurante</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

   <div class="contenedor">
   <div class="card">
   <h1>Ventas</h1>

   <?php if(isset($_GET["msg"]) && $_GET["msg"] === "ok"): ?>

   <p class="alerta-ok">Operacion realizada correctamente.</p>

  <?php endif; ?>

   <a class="btn-crear"
   href="index.php?url=ventas/crear">Nueva venta</a>

   <a class="btn-inicio" href="index.php">Inicio</a>
<table class="tabla">

  <tr>
    <th>ID</th>
    <th>Empleado</th>
    <th>Fecha venta</th>
    <th>Total</th>
    <th>Acciones</th>
  </tr>

  <?php if(!empty($ventas)): ?>
  <?php foreach($ventas as $v): ?>
<tr>

  <td><?= htmlspecialchars($v["id_venta"]) ?></td>

  <td><?= htmlspecialchars($v["empleado"]) ?></td>

  <td><?= htmlspecialchars($v["fecha_venta"]) ?></td>

  <td>$<?= htmlspecialchars($v["total"]) ?></td>

<td>

   <a class="btn-editar" href="index.php?url=ventas/editar&id=<?= $v["id_venta"] ?>">Editar</a>
   <a class="btn-eliminar" href="index.php?url=ventas/eliminar&id=<?= $v["id_venta"] ?>"onclick="return confirmarEliminar()">
    Eliminar
   </a>

</td>
</tr>

    <?php endforeach; ?>
    <?php else: ?>

<tr>
   <td colspan="5">
   No hay ventas registradas
   </td>
</tr>

<?php endif; ?>

</table>
</div>
</div>
   <script src="js/scripts.js"></script>
</body>
</html>