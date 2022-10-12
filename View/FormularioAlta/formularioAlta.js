const seleccion_padre = document.getElementById('dependencia_a_otro_menu');
const formMenu = document.getElementById('form_menu');
const btn_Guardar = document.getElementById('btn_Guardar');
const id =new URLSearchParams(window.location.search).get('id'); 
const formularioAlta = new Menu();

btn_Guardar.addEventListener('click', () => { 
  if (id != null) {
    if (nombre_menu.value == "" || descripcion_menu.value == "") {
      alert('Nombre y Descripción necesarios')
    } else {
      console.log(id);
      formularioAlta.actualizacion(formMenu);
    }
  } else {
    if (nombre_menu.value == "" || descripcion_menu.value == "") {
      alert('Nombre y Descripción necesarios')
    } else {
      formularioAlta.alta(formMenu);
    }
  }
});
function init() {
  if (id != "") { 
    formularioAlta.infoMenu(id);
  }
  formularioAlta.menuPadre();
}
init();