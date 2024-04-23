<?php
// Verificar si se enviaron los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $idioma = $_POST['language'] ?? '';
    $fluidez = $_POST['fluency'] ?? '';
    $aptitudes =$_POST['aptitudes']??'';
    $habilidades = $_POST['habilidades'] ?? [];
    $experiencias = $_POST['experiencia'] ?? [];
    $tipo_formacion = $_POST['tipo-formacion'] ?? '';
    $intereses = $_POST['intereses-adicionales'] ?? '';

    // Aquí puedes realizar la inserción en la base de datos
    // Por ejemplo, utilizando MySQLi

    // Conectarse a la base de datos (reemplaza los valores con los de tu base de datos)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website_page";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, correo) VALUES ('$nombre', '$apellidos', '$telefono', '$correo')";

    if ($conn->query($sql) === TRUE) {
        $usuario_id = $conn->insert_id;
        
        // Insertar el idioma y la fluidez en la tabla de idiomas
        $sql = "INSERT INTO idiomas (usuario_id, idioma, fluidez) VALUES ('$usuario_id', '$idioma', '$fluidez')";
        $conn->query($sql);

        // Insertar las habilidades en la tabla de habilidades
        foreach ($habilidades as $habilidad) {
            $sql = "INSERT INTO habilidades (usuario_id, habilidad) VALUES ('$usuario_id', '$habilidad')";
            $conn->query($sql);
        }

        // Insertar las experiencias laborales en la tabla de experiencias
        foreach ($experiencias as $experiencia) {
            $lugar_trabajo = $experiencia['lugar-trabajo'] ?? '';
            $tiempo_trabajo = $experiencia['tiempo-trabajo'] ?? '';
            $puesto = $experiencia['puesto'] ?? '';

            $sql = "INSERT INTO experiencias_laborales (usuario_id, lugar_trabajo, tiempo_trabajo, puesto) VALUES ('$usuario_id', '$lugar_trabajo', '$tiempo_trabajo', '$puesto')";
            $conn->query($sql);
        }

        // Insertar la formación en la tabla de formación
        // Dependiendo del tipo de formación, los campos pueden variar
        // Aquí deberás adaptar la inserción según tu base de datos
        if ($tipo_formacion === 'colegio') {
            $nombre_colegio = $_POST['nombre-colegio'] ?? '';
            $fecha_inicio_colegio = $_POST['fecha-inicio-colegio'] ?? '';
            $fecha_fin_colegio = $_POST['fecha-fin-colegio'] ?? '';
            $etapa_colegio = $_POST['etapa-colegio'] ?? '';

            $sql = "INSERT INTO formacion (usuario_id, tipo, nombre, fecha_inicio, fecha_fin, etapa) VALUES ('$usuario_id', 'colegio', '$nombre_colegio', '$fecha_inicio_colegio', '$fecha_fin_colegio', '$etapa_colegio')";
            $conn->query($sql);
        } elseif ($tipo_formacion === 'universidad') {
            $nombre_universidad = $_POST['nombre-universidad'] ?? '';
            $fecha_inicio_universidad = $_POST['fecha-inicio-universidad'] ?? '';
            $fecha_fin_universidad = $_POST['fecha-fin-universidad'] ?? '';
            $etapa_universidad = $_POST['etapa-universidad'] ?? '';

            $sql = "INSERT INTO formacion (usuario_id, tipo, nombre, fecha_inicio, fecha_fin, etapa) VALUES ('$usuario_id', 'universidad', '$nombre_universidad', '$fecha_inicio_universidad', '$fecha_fin_universidad', '$etapa_universidad')";
            $conn->query($sql);
        } elseif ($tipo_formacion === 'otro') {
            $nombre_otro = $_POST['nombre-otro'] ?? '';
            $fecha_inicio_otro = $_POST['fecha-inicio-otro'] ?? '';
            $fecha_fin_otro = $_POST['fecha-fin-otro'] ?? '';
            $descripcion_otro = $_POST['descripcion-otro'] ?? '';

            $sql = "INSERT INTO formacion (usuario_id, tipo, nombre, fecha_inicio, fecha_fin, descripcion) VALUES ('$usuario_id', 'otro', '$nombre_otro', '$fecha_inicio_otro', '$fecha_fin_otro', '$descripcion_otro')";
            $conn->query($sql);
        }

        // Insertar los intereses adicionales
        $sql = "INSERT INTO intereses (usuario_id, intereses) VALUES ('$usuario_id', '$intereses')";
        $conn->query($sql);

        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No se enviaron datos";
}
?>
