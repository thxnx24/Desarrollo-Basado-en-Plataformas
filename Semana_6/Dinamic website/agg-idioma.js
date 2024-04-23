document.getElementById('agregar-idioma').addEventListener('click', function() {
    var idiomasDiv = document.querySelector('.Idiomas');
    
    var nuevoIdiomaDiv = document.createElement('div');
    nuevoIdiomaDiv.classList.add('language');
    
    var nuevoIdiomaLabel = document.createElement('label');
    nuevoIdiomaLabel.textContent = 'Idioma:';
    
    var nuevoIdiomaSelect = document.createElement('select');
    nuevoIdiomaSelect.classList.add('language-select');
    nuevoIdiomaSelect.name = 'language';
    // Aquí puedes agregar más opciones de idioma
    
    var fluidezDiv = document.createElement('div');
    fluidezDiv.classList.add('fluency');
    
    var fluidezLabel = document.createElement('label');
    fluidezLabel.textContent = 'Nivel de fluidez - Idioma:';
    
    var fluidezSelect = document.createElement('select');
    fluidezSelect.classList.add('fluency-select');
    fluidezSelect.name = 'fluency';
    // Aquí puedes agregar más opciones de nivel de fluidez
    
    // Agregar opciones de idioma
    var idiomas = ['ingles','italiano', 'portugues', 'chino', 'japones', 'ruso']; // Ejemplo de idiomas adicionales
    idiomas.forEach(function(idioma) {
        var option = document.createElement('option');
        option.value = idioma.toLowerCase();
        option.textContent = idioma.charAt(0).toUpperCase() + idioma.slice(1); // Capitalizar la primera letra
        nuevoIdiomaSelect.appendChild(option);
    });
    
    // Agregar opciones de nivel de fluidez
    var nivelesFluidez = ['principiante', 'intermedio' ,'avanzado']; // Ejemplo de niveles de fluidez adicionales
    nivelesFluidez.forEach(function(nivel) {
        var option = document.createElement('option');
        option.value = nivel.toLowerCase().replace(/\s+/g, '-');
        option.textContent = nivel.charAt(0).toUpperCase() + nivel.slice(1); // Capitalizar la primera letra
        fluidezSelect.appendChild(option);
    });
    
    nuevoIdiomaDiv.appendChild(nuevoIdiomaLabel);
    nuevoIdiomaDiv.appendChild(nuevoIdiomaSelect);
    fluidezDiv.appendChild(fluidezLabel);
    fluidezDiv.appendChild(fluidezSelect);
    
    idiomasDiv.insertBefore(nuevoIdiomaDiv, document.getElementById('agregar-idioma'));
    idiomasDiv.insertBefore(fluidezDiv, document.getElementById('agregar-idioma'));
});