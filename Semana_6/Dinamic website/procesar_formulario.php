<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dinamic_website1";

    $conn = new mysqli($servername, $username, $password, $dbname); //Se crea la conexion:

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error); //verifica conexion
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'] ?? '';
        $apellidos = $_POST['apellidos'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $perfil = $_POST['perfil_adicionales'] ?? '';
        $idioma = $_POST['idioma'] ?? '';
        $nivel_idioma = $_POST['nivel_idioma'] ?? '';
        $aptitudes = isset($_POST['aptitudes']) ? implode(', ', $_POST['aptitudes']) : '';
        $habilidades = isset($_POST['habilidades']) ? implode(', ', $_POST['habilidades']) : '';
        $lugar_trabajo = $_POST['lugar_trabajo'] ?? '';
        $tiempo_trabajo = $_POST['tiempo_trabajo'] ?? '';
        $puesto = $_POST['puesto'] ?? '';
        $tipo_formacion = $_POST['tipo_formacion'] ?? '';
        
        if ($tipo_formacion === 'colegio') {
            $nombre_colegio = $_POST['nombre_colegio'] ?? '';
            $fecha_inicio_colegio = $_POST['fecha_inicio_colegio'] ?? '';
            $fecha_fin_colegio = $_POST['fecha_fin_colegio'] ?? '';
            $etapa_colegio = $_POST['etapa_colegio'] ?? '';
        } elseif ($tipo_formacion === 'universidad') {
            $nombre_universidad = $_POST['nombre_universidad'] ?? '';
            $fecha_inicio_universidad = $_POST['fecha_inicio_universidad'] ?? '';
            $fecha_fin_universidad = $_POST['fecha_fin_universidad'] ?? '';
            $etapa_universidad = $_POST['etapa_universidad'] ?? '';
        } elseif ($tipo_formacion === 'otro') {
            $nombre_otro = $_POST['nombre_otro'] ?? '';
            $fecha_inicio_otro = $_POST['fecha_inicio_otro'] ?? '';
            $fecha_fin_otro = $_POST['fecha_fin_otro'] ?? '';
        }
        
        $intereses_adicionales = $_POST['intereses_adicionales'] ?? '';

        // Insertar los datos en la tabla de registros
        $sql = "INSERT INTO registros (nombre, apellidos, telefono, correo, perfil, idioma, nivel_idioma, aptitudes, habilidades, lugar_trabajo, tiempo_trabajo, puesto, tipo_formacion, nombre_formacion, fecha_inicio_formacion, fecha_fin_formacion, etapa_formacion, intereses_adicionales) 
                VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$perfil', '$idioma', '$nivel_idioma', '$aptitudes', '$habilidades', '$lugar_trabajo', '$tiempo_trabajo', '$puesto', '$tipo_formacion', ";
                
        if ($tipo_formacion === 'colegio') {
            $sql .= "'$nombre_colegio', '$fecha_inicio_colegio', '$fecha_fin_colegio', '$etapa_colegio', ";
        } elseif ($tipo_formacion === 'universidad') {
            $sql .= "'$nombre_universidad', '$fecha_inicio_universidad', '$fecha_fin_universidad', '$etapa_universidad', ";
        } elseif ($tipo_formacion === 'otro') {
            $sql .= "'$nombre_otro', '$fecha_inicio_otro', '$fecha_fin_otro', NULL, ";
        }
        
        $sql .= "'$intereses_adicionales')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }
    } else {
        echo "No se enviaron datos";
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Datos del Formulario</title>
</head>
<body>
    <div class="curriculum_muestra">
    <h1>Curriculum Usuario</h1>
        <div class="Informacion">
        <h3> Informacion de Usuario </h3>
            <p>Nombre: <?php echo $_POST['nombre']; ?></p>
            <p>Apellidos: <?php echo $_POST['apellidos']; ?></p>
        </div>
        <div class="Contacto">
        <h3> Contacto </h3>

            <p>Telefono: <?php echo $_POST['telefono']; ?></p>
            <p>Correo: <?php echo $_POST['correo']; ?></p>
        </div>
        <div class="Perfil">
        <h3>Perfil de Usuario</h3>
            <p>Perfil: <?php echo $_POST['perfil_adicionales']; ?></p>
        </div>
        <div class="Idiomas">
        <h3>Idiomas - Aprendizaje:</h3>
            <p>Idioma: <?php echo $_POST['idioma']; ?></p>
            <p>Nivel de Idioma: <?php echo $_POST['nivel_idioma']; ?></p>
        </div>
        <div class="Aptitudes">
            <h3>Aptitudes:</h3>
            <?php foreach ($_POST['aptitudes'] as $aptitud) : ?>
                <p><?php echo $aptitud; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="Habilidades">
            <h3>Habilidades:</h3>
            <?php foreach ($_POST['habilidades'] as $habilidad) : ?>
                <p><?php echo $habilidad; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="Experiencia Laboral">
            <h3>Experiencia Laboral:</h3>
            <p>Empresa: <?php echo $lugar_trabajo; ?></p>
            <p>Tiempo de Trabajo: <?php echo $tiempo_trabajo; ?></p>
            <p>Puesto: <?php echo $puesto; ?></p>
        </div>
        <div class="Formacion">
            <h3>Formación Académica:</h3>
            <?php if ($tipo_formacion === 'colegio') : ?>
                <p>Tipo: Colegio</p>
                <p>Nombre del colegio: <?php echo $nombre_colegio; ?></p>
                <p>Fecha de inicio: <?php echo $fecha_inicio_colegio; ?></p>
                <p>Fecha de fin: <?php echo $fecha_fin_colegio; ?></p>
                <p>Etapa: <?php echo $etapa_colegio; ?></p>
            <?php elseif ($tipo_formacion === 'universidad') : ?>
                <p>Tipo: Universidad</p>
                <p>Nombre de la universidad: <?php echo $nombre_universidad; ?></p>
                <p>Fecha de inicio: <?php echo $fecha_inicio_universidad; ?></p>
                <p>Fecha de fin: <?php echo $fecha_fin_universidad; ?></p>
                <p>Etapa: <?php echo $etapa_universidad; ?></p>
            <?php elseif ($tipo_formacion === 'otro') : ?>
                <p>Tipo: Otro</p>
                <p>Nombre: <?php echo $nombre_otro; ?></p>
                <p>Fecha de inicio: <?php echo $fecha_inicio_otro; ?></p>
                <p>Fecha de fin: <?php echo $fecha_fin_otro; ?></p>
            <?php endif; ?>
        </div>
        <div class="Intereses adicionales">
        <h3>Intereses Adicionales:</h3>
            <p>Intereses de Usuario: <?php echo $_POST['intereses_adicionales']; ?></p>
        </div>
    </div>
</body>
</html>