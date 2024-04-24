/*Se actualiza el conteo de las palabras que se escribge en el texto - Otros intereres*/
function actualizarConteointereses() {
    var texto = document.getElementById("intereses_adicionales").value;
    var caracteresRestantes = 200 - texto.length;
    document.getElementById("contador_intereses").textContent = texto.length + "/" + 200;
}