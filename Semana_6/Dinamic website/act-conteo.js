/*Se actualiza el conteo de las palabras que se escribge en el texto - Otros intereres*/
function actualizarConteo() {
    var texto = document.getElementById("intereses-adicionales").value;
    var caracteresRestantes = 40 - texto.length;
    document.getElementById("contador").textContent = texto.length + "/" + 40;
}