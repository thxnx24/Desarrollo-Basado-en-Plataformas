/*Se agrega mas experiencia laboral para el usuario*/
document.getElementById('agregar-experiencia').addEventListener('click', function() {
    var experienciaLaboralDiv = document.querySelector('.experiencia-laboral');
    
    // Crear nuevos campos de experiencia laboral
    var nuevoTrabajo = document.createElement('div');
    nuevoTrabajo.classList.add('trabajo');
    nuevoTrabajo.innerHTML = `
        <label for="lugar-trabajo">Lugar de Trabajo:</label>
        <input type="text" class="lugar-trabajo" name="lugar-trabajo" required>
    `;
    
    var nuevoTiempoTrabajo = document.createElement('div');
    nuevoTiempoTrabajo.classList.add('tiempo-trabajo');
    nuevoTiempoTrabajo.innerHTML = `
        <label for="tiempo-trabajo">Tiempo Trabajado:</label>
        <input type="text" class="tiempo-trabajo" name="tiempo-trabajo" required>
    `;
    
    var nuevoPuesto = document.createElement('div');
    nuevoPuesto.classList.add('puesto');
    nuevoPuesto.innerHTML = `
        <label for="puesto">Puesto:</label>
        <input type="text" class="puesto" name="puesto" required>
    `;
    
    // Agregar los nuevos campos al contenedor de experiencia laboral
    experienciaLaboralDiv.appendChild(nuevoTrabajo);
    experienciaLaboralDiv.appendChild(nuevoTiempoTrabajo);
    experienciaLaboralDiv.appendChild(nuevoPuesto);
});