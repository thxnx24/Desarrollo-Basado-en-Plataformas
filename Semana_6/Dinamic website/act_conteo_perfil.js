/*Se actualiza el conteo de las palabras que se escribge en el texto - Perfil*/
function actualizarConteoperfil() {
    var texto = document.getElementById("perfil_adicionales").value;
    var caracteresRestantes = 200 - texto.length;
    document.getElementById("contador_perfil").textContent = texto.length + "/" + 200;
}