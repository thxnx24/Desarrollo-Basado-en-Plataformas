using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace Formulario
{
    public partial class MainPage : ContentPage
    {
        private List<string> seleccionados = new List<string>();
        public MainPage()
        {
            InitializeComponent();

        }
        private void OnItemTapped(object sender, ItemTappedEventArgs e)
        {
            var item = e.Item as string;
            if (item != null)
            {
                if (seleccionados.Contains(item))
                {
                    seleccionados.Remove(item);
                    // Opcional: Cambia la apariencia del elemento para reflejar que ya no está seleccionado
                }
                else
                {
                    seleccionados.Add(item);
                    // Opcional: Cambia la apariencia del elemento para reflejar que está seleccionado
                }
            }

        // Deselecciona el elemento para evitar que permanezca resaltado
        ((ListView)sender).SelectedItem = null;
        }
        private void OnHabilidadCheckedChanged(object sender, CheckedChangedEventArgs e)
        {
            var checkBox = sender as CheckBox;
            if (checkBox == null) return;

            // Aquí puedes manejar la lógica basada en el estado de la casilla de verificación
            // Por ejemplo, agregar o quitar la habilidad de una lista de habilidades seleccionadas
        }
        private async void Enviar_Clicked(object sender, EventArgs e)
        {
            // Aquí va tu lógica para procesar los datos del formulario
            // Por ejemplo, validar los datos y enviarlos a un servidor o base de datos

            // Muestra un mensaje de confirmación (opcional)
            await DisplayAlert("Confirmación", "Formulario enviado con éxito", "OK");
        }

    }

}
