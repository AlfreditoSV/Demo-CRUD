const listaMenu = document.getElementById('listaMenu');
const home = new Menu();
function seccionEditar(id){
  window.open(`http://localhost/ExamenTecnico/View/FormularioAlta/?id=${id}`);
}
home.lista(listaMenu);
