<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Sistema de Gestión de Eventos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <style>
    body {
        font-family: Arial, sans-serif;
    }
    .header {
        background-color: #ccc;
        padding: 10px;
    }
    .header .logo {
        font-size: 1.5em;
        font-weight: bold;
    }
    .hero {
        background-color: #1e90ff;
        color: white;
        padding: 50px 0;
        text-align: center;
    }
    .hero h1 {
        font-size: 3em;
    }
    .hero p {
        font-size: 1.5em;
    }
    .btn-eventos {
        margin-top: 20px;
    }
    .login-button {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    
    <header><?php include('includes/header.php'); ?></header>

    <main class="flex-grow-1">
        <section class="hero">
        <div class="container">
            <h1>SGE</h1>
            <p>Consigue tus entradas a tus eventos favoritos</p>
            <a href="events.php" class="btn btn-primary btn-eventos">Ver Eventos Disponibles</a>
        </div>
    </section></main>
    
    <footer><?php include('includes/footer.php'); ?></footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


