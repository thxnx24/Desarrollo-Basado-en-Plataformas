/*Se agrega más aptitudes*/
document.getElementById('agregar_aptitudes').addEventListener('click', function() {
    var nuevaAptitudes = prompt("Ingrese la nueva aptitud:");
    if (nuevaAptitudes) {
        var checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.id = nuevaAptitudes.toLowerCase().replace(/\s+/g, '-');
        checkbox.name = nuevaAptitudes.toLowerCase().replace(/\s+/g, '-');
        checkbox.value = nuevaAptitudes; 
        var label = document.createElement('label');
        label.htmlFor = nuevaAptitudes.toLowerCase().replace(/\s+/g, '-');
        label.appendChild(document.createTextNode(nuevaAptitudes));
        var aptitudesDiv = document.querySelector('.Aptitudes');
        aptitudesDiv.appendChild(checkbox);
        aptitudesDiv.appendChild(label);
        aptitudesDiv.appendChild(document.createElement('br')); // Salto de línea
    }
});
