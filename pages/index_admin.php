<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #ddd;
        }
        .header-bar {
            background-color: #888;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .sidebar-buttons {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
        }
        .btn-custom {
        background-color: green !important; /* Forzar el fondo verde */
        color: white !important; /* Forzar el texto blanco */
        width: 200px;
        margin-bottom: 10px;
        }
    </style>
</head>


<body class="d-flex flex-column min-vh-100">

    <header><?php include('/xampp/htdocs/Web/includes/header.php'); ?></header>
    <!-- Header -->
    <div class="header-bar">
        <h2>Cuenta de Administrador</h2>
    </div>
    
    <main class="flex-grow-1">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3 sidebar-buttons">
                    <button class="btn btn-custom">Gestionar Eventos</button>
                    <button class="btn btn-custom">Gestionar Roles</button>
                    <button class="btn btn-custom">Caja</button>
                    <button class="btn btn-custom">Asistencias</button>
                    <button class="btn btn-custom">Reportes</button>
                </div>
            </div>
        </div>
    </main>
    <!-- Contenido Principal -->
    <footer><?php include('/xampp/htdocs/Web/includes/footer.php'); ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
