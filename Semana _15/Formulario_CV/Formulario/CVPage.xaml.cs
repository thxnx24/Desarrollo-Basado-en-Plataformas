using System;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Formulario
{
    // Asegúrate de que la clase sea pública y parcial.
    public partial class CVPage : ContentPage
    {
        public CVPage(string nombre, string fechaNacimiento, string ocupacion, string contacto, string nacionalidad, string nivelIngles, string lenguajesProgramacion, string habilidades, string perfil)
        {
            InitializeComponent();

            // Asignación de los valores a los Labels.
            nombreLabel.Text = nombre;
            fechaNacimientoLabel.Text = fechaNacimiento;
            ocupacionLabel.Text = ocupacion;
            contactoLabel.Text = contacto;
            nacionalidadLabel.Text = nacionalidad;
            nivelInglesLabel.Text = nivelIngles;
            lenguajesProgramacionLabel.Text = lenguajesProgramacion;
            habilidadesLabel.Text = habilidades;
            perfilLabel.Text = perfil;
        }
    }
}
