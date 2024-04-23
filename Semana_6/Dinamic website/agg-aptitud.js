/*Se agrega mas aptitudes*/
document.getElementById('agregar-aptitud').addEventListener('click', function() {
    var nuevaAptitud = prompt("Ingrese la nueva aptitud:");
    if (nuevaAptitud) {
        var checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.id = nuevaAptitud.toLowerCase().replace(/\s+/g, '-');
        checkbox.name = nuevaAptitud.toLowerCase().replace(/\s+/g, '-');
        checkbox.value = nuevaAptitud;
        var label = document.createElement('label');
        label.htmlFor = nuevaAptitud.toLowerCase().replace(/\s+/g, '-');
        label.appendChild(document.createTextNode(nuevaAptitud));
        var aptitudesDiv = document.querySelector('.Aptitudes');
        aptitudesDiv.appendChild(checkbox);
        aptitudesDiv.appendChild(label);
        aptitudesDiv.appendChild(document.createElement('br')); // Salto de línea
    }
});