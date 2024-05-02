<?php
// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

// Conectarse a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'tienda');

// Verificar si la conexión fue exitosa
if (!$conn) {
  die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}
  $sql = "SELECT usuario, email FROM usuarios WHERE usuario = '$usuario' OR email='$email'";
  $result = $conn->query($sql);
  // Ejecutar la consulta SQL para insertar los datos en la tabla "usuarios"
  if($result->num_rows == 0) {
    $sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('$usuario', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "Registro exitoso";
    header("Location: login.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    }
  else{
    echo "Ya existe un usuario con el mismo nombre";
  }

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>