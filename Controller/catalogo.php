<?php
include_once '../Config/conexion.php';
include_once '../Model/Catalogo.php';
$catalogo = new Categoria();
switch ($_POST['opcion']) {
  case "altaMenu":
    $alta = $catalogo->altaMenu($_POST['nombre-menu'], $_POST['dependencia-a-otro-menu'], $_POST['descripcion-menu']);
    echo $alta;
    exit();
    break;
  case "actualizarMenu":
    $actualizar = $catalogo->actualizarMenu($_POST['nombre-menu'], $_POST['dependencia-a-otro-menu'], $_POST['descripcion-menu'], $_POST['id_menu']);
    echo $actualizar;
    exit();
    break;
  case "eliminarMenu":
    $eliminar = $catalogo->eliminarMenu($_POST['id_menu']);
    echo $eliminar;
    exit();
    break;
  case "infoMenuId":
    $info = $catalogo->infoMenuId($_POST['id_menu']);
    echo $info;
    exit();
    break;
  case "listaMenu":
    $lista = $catalogo->listaMenu();
    $data = array();
    foreach ($lista as $fila) {
      $subArray = array();
      $subArray['1'] = $fila['id_Menu'];
      $subArray['2'] = $fila['nombre_Menu'];
      $subArray['3'] = $fila['categoria_MenuPadre'];
      $subArray['4'] = $fila['descripcion_Menu'];
      $subArray['5'] = "<button type='button' class='btn btn-info' onClick=seccionEditar('{$fila["id_Menu"]}') value='{$fila['id_Menu']}'><span class='btn-icon'>&#x270E;</span> Editar</button>
      <button type='button' class='btn btn-cancelar' onClick=home.eliminar('{$fila["id_Menu"]}')  value='{$fila['id_Menu']}'><span class='btn-icon'>&#128465;</span> Eliminar</button>";
      $data[] = $subArray;
    }
    echo json_encode($data);
    exit();
    break;
    case "listaMenuNombre":
      $lista = $catalogo->listaMenuNombre($_POST['nombre-menu']);
      $data = array();
      foreach ($lista as $fila) {
        $subArray = array();
        $subArray['1'] = $fila['id_Menu'];
        $subArray['2'] = $fila['nombre_Menu'];
        $subArray['3'] = $fila['categoria_MenuPadre'];
        $subArray['4'] = $fila['descripcion_Menu'];
        $subArray['5'] = "<button type='button' class='btn btn-info' onClick=seccionEditar('{$fila["id_Menu"]}') value='{$fila['id_Menu']}'><span class='btn-icon'>&#x270E;</span> Editar</button>
        <button type='button' class='btn btn-cancelar' onClick=home.liminar({$fila["id_Menu"]})   value='{$fila['id_Menu']}'><span class='btn-icon'>&#128465;</span> Eliminar</button>";
        $data[] = $subArray;
      }
      echo json_encode($data);
      exit();
      break;
      case "navMenu":
        $lista = $catalogo->listaMenu();
        $data = array();
        foreach ($lista as $fila) {
          
          $data[]="<a onClick=home.listaNombre('{$fila['nombre_Menu']}',listaMenu) ><p>'{$fila['nombre_Menu']}'</p></a>";        
        }     
        $filt=array_unique($data);
        echo json_encode($filt);
        exit();
        break;
        case "navMenuPadre":
          $lista = $catalogo->listaMenu();
          $data = array();
          foreach ($lista as $fila) {            
            $data[]="<a onClick=home.listaNombre('{$fila['categoria_MenuPadre']}',listaMenu) ><p>'{$fila['categoria_MenuPadre']}'</p></a>";        
          }     
          $filt=array_unique($data);
          echo json_encode($filt);
          exit();
          break;
}
