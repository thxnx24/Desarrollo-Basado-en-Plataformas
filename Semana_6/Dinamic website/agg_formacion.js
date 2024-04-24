document.getElementById('agregar_informacion').addEventListener('click', function() {
    var tipoFormacion = document.getElementById('tipo_formacion').value;
    var formularioFormacion = document.getElementById('formulario_formacion');

    // Crear formulario según el tipo de formación seleccionado
    if (tipoFormacion === 'colegio') {
        formularioFormacion.innerHTML += `
            <div class="colegio">
                
                <label for="nombre_colegio">Colegio:</label>
                <input type="text" id="nombre_colegio" name="nombre_colegio" required>
                
                <label for="fecha_inicio_colegio">Fecha de inicio - Colegio:</label>
                <input type="date" id="fecha_inicio_colegio" name="fecha_inicio_colegio" required>
                
                <label for="fecha_fin_colegio">Fecha de fin - Colegio:</label>
                <input type="date" id="fecha_fin_colegio" name="fecha_fin_colegio" required>
                
                <label for="etapa_colegio">Etapa de formación - Colegio:</label>
                
                <select id="etapa_colegio" name="etapa_colegio">
                    <option value="inicial">Educación Inicial</option>
                    <option value="primaria">Educación Primaria</option>
                    <option value="secundaria">Educación Secundaria</option>
                </select>
            </div>
        `;
    } else if (tipoFormacion === 'universidad') {
        formularioFormacion.innerHTML += `
            <div class="universidad">
                
                <label for="nombre_universidad">Universidad:</label>
                <input type="text" id="nombre_universidad" name="nombre_universidad" required>
                
                <label for="fecha_inicio_universidad">Fecha de inicio - Universidad:</label>
                <input type="date" id="fecha_inicio_universidad" name="fecha_inicio_universidad" required>
                
                <label for="fecha_fin_universidad">Fecha de fin - Universidad:</label>
                <input type="date" id="fecha_fin_universidad" name="fecha_fin_universidad" required>
                
                <label for="etapa_universidad">Etapa de formación - Universidad</label>
                <select id="etapa_universidad" name="etapa_universidad">
                    <option value="bachillerato">Bachillerato</option>
                    <option value="maestro">Maestria</option>
                    <option value="doctor">Doctorado</option>
                </select>
            </div>
        `;
    } else if (tipoFormacion === 'otro') {
        formularioFormacion.innerHTML += `
            <div class="otro">
                
                <label for="nombre_otro">Otro tipo de formación:</label>
                <input type="text" id="nombre_otro" name="nombre_otro" required>
                
                <label for="fecha_inicio_otro">Fecha de inicio _ Otro:</label>
                <input type="date" id="fecha_inicio_otro" name="fecha_inicio_otro" required>
                
                <label for="fecha_fin_otro">Fecha de fin _ Otro:</label>
                <input type="date" id="fecha_fin_otro" name="fecha_fin_otro" required>

            </div>
        `;
    }
});
