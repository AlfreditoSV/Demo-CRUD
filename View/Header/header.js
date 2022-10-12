const contNombreMenu = document.querySelector('.cont-nombre-menu');
const contCategoriasMenu = document.querySelector('.cont-categorias-menu');
let navBar = new NavMenu();
navBar.navBarNombre(contNombreMenu);
navBar.navBarPadre(contCategoriasMenu);