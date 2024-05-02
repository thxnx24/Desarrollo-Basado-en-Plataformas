<?php
// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'tienda');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario de inicio de sesión
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Verificar si el usuario y la contraseña son válidos
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {
    session_start();
    $_SESSION['usuario'] = $usuario; // donde $username es el nombre de usuario
    // Inicio de sesión exitoso, redirigir a la página de productos
    header("Location: index.php");
} else {
    // Inicio de sesión fallido, mostrar un mensaje de error
    echo "Usuario o contraseña incorrectos";
}

$conn->close();
?>