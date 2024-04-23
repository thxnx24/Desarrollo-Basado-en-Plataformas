document.getElementById('agregar-informacion').addEventListener('click', function() {
    var tipoFormacion = document.getElementById('tipo-formacion').value;
    var formularioFormacion = document.getElementById('formulario-formacion');

    // Crear formulario según el tipo de formación seleccionado
    if (tipoFormacion === 'colegio') {
        formularioFormacion.innerHTML += `
            <div class="colegio">
                <label for="nombre-colegio">Colegio:</label>
                <input type="text" id="nombre-colegio" name="nombre-colegio" required>
                <label for="fecha-colegio">Fecha de inicio - Colegio:</label>
                <input type="date" id="fecha-colegio" name="fecha-colegio" required>
                <label for="fecha-fin-colegio">Fecha de fin - Colegio:</label>
                <input type="date" id="fecha-fin-colegio" name="fecha-fin-colegio" required>
                <label for="etapa-colegio">Etapa de formación - Colegio:</label>
                <select id="etapa-colegio" name="etapa-colegio">
                    <option value="inicial">Educación Inicial</option>
                    <option value="primaria">Educación Primaria</option>
                    <option value="secundaria">Educación Secundaria</option>
                </select>
            </div>
        `;
    } else if (tipoFormacion === 'universidad') {
        formularioFormacion.innerHTML += `
            <div class="universidad">
                <label for="nombre-universidad">Universidad:</label>
                <input type="text" id="nombre-universidad" name="nombre-universidad" required>
                <label for="fecha-universidad">Fecha de inicio - Universidad:</label>
                <input type="date" id="fecha-universidad" name="fecha-universidad" required>
                <label for="fecha-fin-universidad">Fecha de fin - Universidad:</label>
                <input type="date" id="fecha-fin-universidad" name="fecha-fin-universidad" required>
                <label for="etapa-universidad">Etapa de formación - Universidad</label>
                <select id="etapa-universidad" name="etapa-universidad">
                    <option value="bachillerato">Bachillerato</option>
                    <option value="maestro">Magíster</option>
                    <option value="doctor">Doctorado</option>
                </select>
            </div>
        `;
    } else if (tipoFormacion === 'otro') {
        formularioFormacion.innerHTML += `
            <div class="otro">
                <label for="nombre-otro">Otro tipo de formación:</label>
                <input type="text" id="nombre-otro" name="nombre-otro" required>
                <label for="fecha-otro">Fecha de inicio - Otro:</label>
                <input type="date" id="fecha-otro" name="fecha-otro" required>
                <!-- Agrega aquí los campos adicionales según tu necesidad -->
            </div>
        `;
    }
});