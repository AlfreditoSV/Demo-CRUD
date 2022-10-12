<!DOCTYPE html>
<html lang="en">
<?php include_once '../Head/head.php'?>
<title>Formulario Alta</title>
</head>
<body>
<?php include_once '../Header/header.php'?>
<div>
  <div class="titulo titulo-tabla">
    <div >Menu</div>
    <div><a href="../FormularioAlta/" class="btn btn-aceptar"><span class="btn-icon">+</span> Nuevo</a></div>
  </div>
  <table class="lista-tabla">
    <thead>
      <tr>
        <th >ID</th>
        <th >Nombre</th>
        <th >MenúPadre</th>
        <th >Descripción</th>
        <th >Acciones</th>
      </tr>
    </thead>
    <tbody id="listaMenu">
    </tbody>
  </table>
</div>
<script src="../menu.js"></script>
<script src="../Header/header.js"></script>
<script src="home.js"></script>
</body>
</html>