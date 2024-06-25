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

        }
        private async void Enviar_Clicked(object sender, EventArgs e)
        {
            // Verificar si los campos están rellenados
            if (string.IsNullOrWhiteSpace(nombreEntry.Text) ||
                fechaNacimientoPicker.Date == null ||
                string.IsNullOrWhiteSpace(ocupacionEntry.Text) ||
                string.IsNullOrWhiteSpace(telefonoEntry.Text) ||
                string.IsNullOrWhiteSpace(emailEntry.Text) ||
                nacionalidadPicker.SelectedIndex == -1 ||
                string.IsNullOrWhiteSpace(aptitudesEntry.Text) ||
                string.IsNullOrWhiteSpace(perfilEditor.Text))
            {
                
                await DisplayAlert("Validación", "Por favor, rellena todos los campos requeridos.", "OK");
                return; 
            }

            await DisplayAlert("Éxito", "Formulario enviado correctamente.", "OK");
        }

    }

}
