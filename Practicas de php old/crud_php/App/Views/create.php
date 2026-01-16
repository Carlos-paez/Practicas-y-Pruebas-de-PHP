<?php
// --- BLOQUE DEL CONTROLADOR ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = [
        'nombre' => $_POST['nombre'] ?? '',
        'rol'    => $_POST['rol']    ?? '',
        'ci'     => $_POST['ci']     ?? ''
    ];
    // Aquí iría la lógica para guardar: $userController->save($formData);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Crear Usuario</h1>
        <form method="POST" class="border p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control"
                    value="<?= htmlspecialchars($user['nombre'] ?? '') ?>" placeholder="Ingresa el nombre" required />
            </div>

            <div class="mb-3">
                <label for="rol" class="form-label">Rol:</label>
                <input type="text" name="rol" id="rol" class="form-control"
                    value="<?= htmlspecialchars($user['rol'] ?? '') ?>" placeholder="Ingresa el rol" required />
            </div>

            <div class="mb-3">
                <label for="ci" class="form-label">CI:</label>
                <input type="text" name="ci" id="ci" class="form-control"
                    value="<?= htmlspecialchars($user['ci'] ?? '') ?>" placeholder="Ingresa el CI" required />
            </div>

            <div class="d-flex justify-content-between">
                <a href="?controller=user&action=index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            </div>
        </form>
    </div>
</body>

</html>