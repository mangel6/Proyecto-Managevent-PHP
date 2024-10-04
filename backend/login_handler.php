session_start();

// Después de validar el inicio de sesión, asignar la información del usuario en la sesión
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username; // Nombre del usuario
$_SESSION['roles'] = ['Admin', 'Usuario']; // Ejemplo de roles
$_SESSION['currentRole'] = $_SESSION['roles'][0]; // Asigna el primer rol como el actual

// Redirigir a la página de inicio o a otra página
header("Location: /index.php");
