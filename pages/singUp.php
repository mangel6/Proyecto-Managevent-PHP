<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Crear Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        .form-control-custom {
            background-color: #5a6268;
            color: white;
        }
        .btn-cancel {
            background-color: red !important;
            color: white !important;
        }
        .btn-register {
            background-color: green !important;
            color: white !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    
    <!-- Header -->
    <header><?php include('/xampp/htdocs/Web/includes/header.php'); ?></header>
    
    <!-- Main: Formulario de creación de cuenta -->
    <main class="flex-grow-1">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3>Crear una cuenta</h3>
                    </div>
                    <div class="card-body">
                        <form action="registrar.php" method="POST">
                            <!-- Nombre -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control form-control-custom" id="nombre" name="nombre" required>
                            </div>
                            <!-- Apellido -->
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control form-control-custom" id="apellido" name="apellido" required>
                            </div>
                            <!-- Correo -->
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control form-control-custom" id="correo" name="correo" required>
                            </div>
                            <!-- Teléfono -->
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control form-control-custom" id="telefono" name="telefono" required>
                            </div>
                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control form-control-custom" id="contraseña" name="contraseña" required>
                            </div>
                            <!-- Tipo de Documento y Número de Documento -->
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="tipo_documento" class="form-label">Tipo de Documento</label>
                                    <select class="form-control form-control-custom" id="tipo_documento" name="tipo_documento" required>
                                        <option value="dni">DNI</option>
                                        <option value="carnet_extranjero">Carnet extranjero</option>
                                        <option value="codigo_universitario">Código universitario</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="numero_documento" class="form-label">Nº de documento</label>
                                    <input type="text" class="form-control form-control-custom" id="numero_documento" name="numero_documento" required>
                                </div>
                            </div>
                            <!-- Botones -->
                            <div class="d-flex justify-content-between">
                                <button type="reset" class="btn btn-cancel">Cancelar</button>
                                <button type="submit" class="btn btn-register">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer><?php include('/xampp/htdocs/Web/includes/footer.php'); ?></footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>