CREATE TABLE IF NOT EXISTS datos_formulario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellidos VARCHAR(50),
    fecha_nacimiento DATE,
    ocupacion VARCHAR(50),
    telefono VARCHAR(20),
    correo VARCHAR(50),
    nacionalidad VARCHAR(50),
    nivel_ingles VARCHAR(20),
    lenguajes_programacion TEXT,
    aptitudes VARCHAR(50),
    habilidades TEXT,
    perfil TEXT
);
