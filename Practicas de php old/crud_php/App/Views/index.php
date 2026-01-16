<?php
// --- BLOQUE DEL CONTROLADOR (Lógica de preparación) ---
// Nos aseguramos de que $users sea al menos un array vacío para que el foreach no falle
$users = $users ?? [];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de Usuarios</h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="?controller=user&action=create" class="btn btn-primary">Crear un Usuario</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cedula de Identidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="4" class="text-center">No hay usuarios registrados.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?? '' ?></td>
                            <td><?= $user['nombre'] ?? 'Sin nombre' ?></td>
                            <td><?= $user['ci'] ?? 'Sin ci' ?></td>
                            <td>
                                <a href="?controller=user&action=edit&id=<?= urlencode($user['id'] ?? '') ?>"
                                    class="btn btn-warning btn-sm me-2">Editar</a>

                                <a href="?controller=user&action=delete&id=<?= urlencode($user['id'] ?? '') ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>