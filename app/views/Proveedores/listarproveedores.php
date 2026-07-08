<?php
$proveedores = $proveedores ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Listado de Proveedores</title>
</head>
<body>

<div class="contenedor">
    <div class="card">

        <h1>Listado de Proveedores</h1>

        <a class="btn-crear"
           href="index.php?url=proveedores/crearForm">

            Crear Proveedor

        </a>

        <a class="btn-inicio"
           href="index.php">

            Inicio

        </a>

        <table class="tabla">

            <tr>

                <th>ID</th>

                <th>Nombre</th>

                <th>Teléfono</th>

                <th>Correo</th>

                <th>Dirección</th>

                <th>Acciones</th>


            </tr>

            <?php foreach ($proveedores as $p): ?>
            <tr>

                <td>

                    <?= htmlspecialchars($p["id_proveedor"]) ?>

                </td>

                <td>

                    <?= htmlspecialchars($p["nombre"]) ?>

                </td>

                <td>

                    <?= htmlspecialchars($p["telefono"]) ?>

                </td>

                <td>

                    <?= htmlspecialchars($p["email"]) ?>

                </td>

                <td>

                    <?= htmlspecialchars($p["direccion"]) ?>

                </td>

                <td>

                    <a class="btn-editar"
                       href="index.php?url=proveedores/editarForm&id=<?= $p["id_proveedor"] ?>">
                        Editar

                    </a>

                    <a class="btn-eliminar"
                       href="index.php?url=proveedores/eliminar&id=<?= $p["id_proveedor"] ?>"
                       onclick="return confirm('¿Está seguro de eliminar este proveedor?')">
                        Eliminar

                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>

</div>
<script src="js/scripts.js"></script>
</body>
</html>