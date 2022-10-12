class Menu {
  navMenu = (tbody) => {
    const setForm = new FormData();
    setForm.append("opcion", "listaMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        response.forEach((element) => {
          tbody.innerHTML += `
          <tr>
          <td>${element[1]}</td>
          <td>${element[2]}</td>
          <td>${element[3]}</td>
          <td>${element[4]}</td>
          <td>${element[5]}</td>
          </tr>
          `;
        });
      });
  };
  lista = (tbody) => {
    const setForm = new FormData();
    setForm.append("opcion", "listaMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        response.forEach((element) => {
          tbody.innerHTML += `
          <tr>
          <td>${element[1]}</td>
          <td>${element[2]}</td>
          <td>${element[3]}</td>
          <td>${element[4]}</td>
          <td>${element[5]}</td>
          </tr>
          `;
        });
      });
  };
  listaNombre = (nombre, tbody) => {
    while (tbody.firstChild) {
      tbody.removeChild(tbody.firstChild);
    }
    const setForm = new FormData();
    setForm.append("nombre-menu", nombre);
    setForm.append("opcion", "listaMenuNombre");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        response.forEach((element) => {
          tbody.innerHTML += `
          <tr>
          <td>${element[1]}</td>
          <td>${element[2]}</td>
          <td>${element[3]}</td>
          <td>${element[4]}</td>
          <td>${element[5]}</td>
          </tr>
          `;
        });
      });
  };
  alta = (form) => {
    const setForm = new FormData(form);
    setForm.append("opcion", "altaMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.text())
      .then((response) => {
        alert("Se inserto de forma correcta");
        form.reset();
      });
  };

  actualizacion = (form) => {
    const setForm = new FormData(form);
    setForm.append("id_menu", id);
    setForm.append("opcion", "actualizarMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.text())
      .then((response) => {
        alert("Se actualizó de forma correcta");
        form.reset();
      });
  };

  eliminar = (id) => {
    const setForm = new FormData();
    setForm.append("id_menu", id);
    setForm.append("opcion", "eliminarMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.text())
      .then((response) => {
        alert("Se elimino de forma correcta")
        window.location.reload();
      })
      .catch((response) => {
        console.log("Error: " + response);
      });
  };
  infoMenu = (id) => {
    const setForm = new FormData();
    setForm.append("id_menu", id);
    setForm.append("opcion", "infoMenuId");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        response.forEach((element) => {
          seleccion_padre.value = element.menuPadre_Menu;
          nombre_menu.value = element.nombre_Menu;
          descripcion_menu.value = element.descripcion_Menu;
        });
      });
  };
  menuPadre = () => {
    fetch("../../Controller/menuPadre.php", {
      method: "POST",
    })
      .then((response) => response.text())
      .then((response) => {
        seleccion_padre.insertAdjacentHTML("afterbegin", response);
      });
  };
}

class NavMenu {
  navBarNombre = (contenedor) => {
    const setForm = new FormData();
    setForm.append("opcion", "navMenu");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        for (let i = 0; i < 5; i++) { 
          if (response[i] != undefined) { 
            contenedor.innerHTML += response[i];
          }
        }    
      });
  };
  navBarPadre = (contenedor) => {
    const setForm = new FormData();
    setForm.append("opcion", "navMenuPadre");
    fetch("../../Controller/catalogo.php", {
      method: "POST",
      body: setForm,
    })
      .then((response) => response.json())
      .then((response) => {
        for (let i = 0; i < 5; i++) {         
          if (response[i] != undefined) { 
            contenedor.innerHTML += response[i];
          }
        }    
      });
  };
}
