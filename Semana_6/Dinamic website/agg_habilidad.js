document.getElementById('agregar_habilidad').addEventListener('click', function() {
    var nuevaHabilidad = prompt("Ingrese la nueva habilidad:");
    if (nuevaHabilidad) {
        var checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.id = nuevaHabilidad.toLowerCase().replace(/\s+/g, '-');
        checkbox.name = nuevaHabilidad.toLowerCase().replace(/\s+/g, '-');
        checkbox.value = nuevaHabilidad;
        var label = document.createElement('label');
        label.htmlFor = nuevaHabilidad.toLowerCase().replace(/\s+/g, '-');
        label.appendChild(document.createTextNode(nuevaHabilidad));
        var habilidadesDiv = document.querySelector('.Habilidades');
        habilidadesDiv.appendChild(checkbox);
        habilidadesDiv.appendChild(label);
        habilidadesDiv.appendChild(document.createElement('br')); // Salto de línea
    }
});