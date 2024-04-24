document.getElementById('agregar_idioma').addEventListener('click', function() {
    var idiomasDiv = document.querySelector('.Idiomas');
    
    var nuevoIdiomaDiv = document.createElement('div');
    nuevoIdiomaDiv.classList.add('language');
    
    var nuevoIdiomaLabel = document.createElement('label');
    nuevoIdiomaLabel.textContent = 'Idioma:';
    
    var nuevoIdiomaSelect = document.createElement('select');
    nuevoIdiomaSelect.classList.add('language_select');
    nuevoIdiomaSelect.name = 'idioma'; // Cambiado a 'idioma[]' para enviar un array de idiomas
    
    var fluidezDiv = document.createElement('div');
    fluidezDiv.classList.add('fluency');
    
    var fluidezLabel = document.createElement('label');
    fluidezLabel.textContent = 'Nivel de fluidez - Idioma:';
    
    var fluidezSelect = document.createElement('select');
    fluidezSelect.classList.add('fluency_select');
    fluidezSelect.name = 'nivel_idioma'; // Cambiado a 'nivel_idioma[]' para enviar un array de niveles de idioma
    
    // Agregar opciones de idioma
    var idiomas = ['ingles', 'italiano', 'portugues', 'chino', 'japones', 'ruso'];
    idiomas.forEach(function(idioma) {
        var option = document.createElement('option');
        option.value = idioma.toLowerCase();
        option.textContent = idioma.charAt(0).toUpperCase() + idioma.slice(1);
        nuevoIdiomaSelect.appendChild(option);
    });
    
    // Agregar opciones de nivel de fluidez
    var nivelesFluidez = ['principiante', 'intermedio', 'avanzado'];
    nivelesFluidez.forEach(function(nivel) {
        var option = document.createElement('option');
        option.value = nivel.toLowerCase().replace(/\s+/g, '-');
        option.textContent = nivel.charAt(0).toUpperCase() + nivel.slice(1);
        fluidezSelect.appendChild(option);
    });
    
    nuevoIdiomaDiv.appendChild(nuevoIdiomaLabel);
    nuevoIdiomaDiv.appendChild(nuevoIdiomaSelect);
    fluidezDiv.appendChild(fluidezLabel);
    fluidezDiv.appendChild(fluidezSelect);
    
    idiomasDiv.insertBefore(nuevoIdiomaDiv, document.getElementById('agregar_idioma'));
    idiomasDiv.insertBefore(fluidezDiv, document.getElementById('agregar_idioma'));
});
