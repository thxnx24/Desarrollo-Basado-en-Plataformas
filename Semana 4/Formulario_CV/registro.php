<?php
// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'nombre_base_de_datos');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['fname'];
$apellidos = $_POST['lname'];
$fecha_nacimiento = $_POST['bdate'];
$ocupacion = $_POST['ocu'];
$telefono = $_POST['phone'];
$correo = $_POST['mail'];
$nacionalidad = $_POST['nacion'];
$nivel_ingles = $_POST['nivel_ingles'];
$lenguajes_programacion = implode(", ", $_POST['lenguajes_programacion']);
$aptitudes = $_POST['aptitudes'];
$habilidades = implode(", ", $_POST['Habilidades']);
$perfil = $_POST['perfil'];

// Preparar y ejecutar consulta SQL para insertar datos en la base de datos
$sql = "INSERT INTO datos_formulario (nombre, apellidos, fecha_nacimiento, ocupacion, telefono, correo, nacionalidad, nivel_ingles, lenguajes_programacion, aptitudes, habilidades, perfil) VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$ocupacion', '$telefono', '$correo', '$nacionalidad', '$nivel_ingles', '$lenguajes_programacion', '$aptitudes', '$habilidades', '$perfil')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
