<?php
include_once '../Config/conexion.php';
include_once '../Model/MenuPadre.php';
$catalogo=new MenuPadre();
$metodo=$_SERVER['REQUEST_METHOD'];
if($metodo=="POST"){
 $datos=$catalogo->listaPadre();
 $lista='';
 foreach ($datos as $filas) {
  if($filas['categoria_MenuPadre']!=""){
  $lista.='<option value='.'"'.$filas['id_MenuPadre'].'"'.'>'.$filas['categoria_MenuPadre'].'</option>';
}
 }
 echo $lista;
}

?>