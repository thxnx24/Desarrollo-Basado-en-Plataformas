using System;
using System.Collections.Generic;
using Xamarin.Forms;

namespace Formulario
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private void OnEnviarClicked(object sender, EventArgs e)
        {
            // Recoger datos del formulario
            string nombreApellidos = nombreApellidosEntry.Text;
            DateTime fechaNacimiento = fechaNacimientoPicker.Date;
            string ocupacion = ocupacionEntry.Text;
            string contacto = contactoEntry.Text;
            string nacionalidad = nacionalidadPicker.SelectedItem?.ToString();

            string nivelIngles = null;
            if (basicoRadioButton.IsChecked)
                nivelIngles = "Básico";
            else if (intermedioRadioButton.IsChecked)
                nivelIngles = "Intermedio";
            else if (avanzadoRadioButton.IsChecked)
                nivelIngles = "Avanzado";
            else if (fluidoRadioButton.IsChecked)
                nivelIngles = "Fluido";

            var lenguajesProgramacion = new List<string>();
            if (lenguajeCsharpCheckBox.IsChecked)
                lenguajesProgramacion.Add("C#");
            if (lenguajeJavaCheckBox.IsChecked)
                lenguajesProgramacion.Add("Java");
            if (lenguajePythonCheckBox.IsChecked)
                lenguajesProgramacion.Add("Python");
            if (lenguajeJavaScriptCheckBox.IsChecked)
                lenguajesProgramacion.Add("JavaScript");

            // Obtener aptitudes (si tienes una fuente de datos)
            // var aptitudes = ...

            var habilidades = new List<string>();
            if (habilidadComunicacionCheckBox.IsChecked)
                habilidades.Add("Comunicación");
            if (habilidadTrabajoEquipoCheckBox.IsChecked)
                habilidades.Add("Trabajo en equipo");
            if (habilidadLiderazgoCheckBox.IsChecked)
                habilidades.Add("Liderazgo");
            if (habilidadCreatividadCheckBox.IsChecked)
                habilidades.Add("Creatividad");

            string perfil = perfilEditor.Text;

            // Procesar datos (aquí puedes guardarlos, enviarlos a un servidor, etc.)
            DisplayAlert("Datos Recibidos",
                $"Nombre y Apellidos: {nombreApellidos}\nFecha de Nacimiento: {fechaNacimiento.ToShortDateString()}\nOcupación: {ocupacion}\nContacto: {contacto}\nNacionalidad: {nacionalidad}\nNivel de Inglés: {nivelIngles}\nLenguajes de Programación: {string.Join(", ", lenguajesProgramacion)}\nHabilidades: {string.Join(", ", habilidades)}\nPerfil: {perfil}",
                "OK");
        }
    }
}
