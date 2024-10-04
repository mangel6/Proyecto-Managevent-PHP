<?php
session_start(); // Iniciar la sesión

// Simulación de datos de usuario para el ejemplo
// Estos datos normalmente vendrían de la base de datos después del login
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
$roles = isset($_SESSION['roles']) ? $_SESSION['roles'] : []; // Array con los roles del usuario
$currentRole = isset($_SESSION['currentRole']) ? $_SESSION['currentRole'] : 'Usuario'; // Rol actual

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE</title>
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- Enlaza tu CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/Web/index.php">SGE</a>

        <div class="ml-auto">
            <?php if ($isLoggedIn): ?>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="roleDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $currentRole; ?> <!-- Rol actual -->
                    </button>
                    <div class="dropdown-menu" aria-labelledby="roleDropdown">
                        <?php foreach($roles as $role): ?>
                            <a class="dropdown-item" href="?role=<?php echo $role; ?>"><?php echo $role; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <span class="ml-3">Usuario</span>
                <a href="/logout.php" class="ml-3">Cerrar sesión</a>
            <?php else: ?>
                <a href="/Web/pages/logIn.php" class="btn btn-outline-primary">Iniciar Sesión</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
