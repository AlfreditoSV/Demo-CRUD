<!DOCTYPE html>
<html lang="en">
<?php include_once '../Head/head.php'?>
<title>Formulario Alta</title>
</head>
<body>
<?php include_once '../Header/header.php'?>
<section>
<div class="titulo"><h3>Formulario</h3></div>
   <div class="center-center">   
    <form id="form_menu">
      <table>
        <tr>
        <td><label for="seleccionar_menu">Menu Padre</label></td>
        <td>
      <select name="dependencia-a-otro-menu" class="input-form" id="dependencia_a_otro_menu">
        <option value="3" selected> Seleccione una opción</option>
      </select></td>
        </tr>
        <tr>
          <td><label for="nombre">Nombre</label></td>
          <td><input type="text" name="nombre-menu" class="input-form" id="nombre_menu" required></td>
        </tr>
        <tr>
        <td><label for="descripcion">Descripcion</label></td>
        <td><textarea name="descripcion-menu" class="input-form" id="descripcion_menu" cols="30" rows="10" required></textarea></td>
      </tr>
      </table>
     
    <div class="cont-btn">
      <button type="button" class="btn btn-cancelar btn_Cancelar" id="btn_Cancelar"><span class="icon">&#x2716;<span>Cancelar</button>
      <button type="button" class="btn btn-aceptar btn_Guardar" id="btn_Guardar"><span class="icon">&#x2714;<span>Guardar</button>
    </div>
    </form>
    </div>
    </section>
    <script src="../menu.js"></script>
    <script src="../Header/header.js"></script>
  <script src="formularioAlta.js"></script>
</body>
</html>