<?php
$categorias = $categorias ?? [];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Lista de Categorías</title>

</head>

<body>

<div class="contenedor">

    <div class="card">

        <h1>Lista de Categorías</h1>

        <a class="btn-crear" href="index.php?url=categorias/crearForm">
            <i class="bi bi-plus-circle"></i>
            Nueva Categoría
        </a>

        <a class="btn-inicio" href="index.php?url=inicio">
            Inicio
        </a>

        <table class="tabla">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

            <?php foreach($categorias as $categoria): ?>

                <tr>

                    <td><?= htmlspecialchars($categoria["id_categoria"]) ?></td>

                    <td><?= htmlspecialchars($categoria["nombre"]) ?></td>

                    <td><?= htmlspecialchars($categoria["descripcion"]) ?></td>

                    <td>

                        <a class="btn-editar"
                           href="index.php?url=categorias/editarForm&id=<?= $categoria["id_categoria"] ?>">
                            Editar
                        </a>

                        <a class="btn-eliminar"
                           href="index.php?url=categorias/eliminar&id=<?= $categoria["id_categoria"] ?>"
                           onclick="return confirm('¿Está seguro de eliminar esta categoría?')">
                            Eliminar
                        </a>
   
                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<script src="js/scripts.js"></script>

</body>

</html>