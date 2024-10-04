<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">
    <header><?php include('/xampp/htdocs/Web/includes/header.php'); ?></header>
    <!-- Contenedor de inicio de sesión -->
    <main class="flex-grow-1">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3>Inicie Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="logIn.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="johndoe@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="*******" required>
                            </div>
                            <div class="mb-3">
                                <a href="#" class="link-primary">¿Olvidaste la contraseña?</a>
                            </div>
                            <!-- Botón para iniciar sesión -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            </div>
                        </form>

                        <hr>

                        <!-- Botón para registrarse -->
                        <div class="text-center">
                            <span>Nuevo usuario?</span>
                            <a href="/Web/pages/singUp.php" class="btn btn-info mt-2">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer><?php include('/xampp/htdocs/Web/includes/footer.php'); ?></footer>
    
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
