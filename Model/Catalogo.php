<?php
class Categoria extends Conectar{
public function altaMenu($nombre,$menuPadre,$descripcion){
  $conn=parent::conexion();
  $sql="INSERT INTO SubMenu VALUES(NULL,?,?,?)";
  $query=$conn->prepare($sql); 
  $query->bindValue(1,$nombre);
  $query->bindValue(2,$menuPadre);
  $query->bindValue(3,$descripcion);
  $query->execute();
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $result=$query->fetchAll();
  return json_encode($result);
}

public function actualizarMenu($nombre,$menuPadre,$descripcion,$id_menu){
  $conn=parent::conexion();
  $sql="UPDATE SubMenu 
  SET
  nombre_Menu=?,
  menuPadre_Menu=?,
  descripcion_Menu=?
  WHERE id_Menu=?
  ";
    $query=$conn->prepare($sql); 
    $query->bindValue(1,$nombre);
    $query->bindValue(2,$menuPadre);
    $query->bindValue(3,$descripcion); 
    $query->bindValue(4,$id_menu); 
    $query->execute(); 
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $result=$query->fetchAll();
    return json_encode($result);

}
public function eliminarMenu($id_menu){
  $conn=parent::conexion();
  $sql="DELETE FROM SubMenu WHERE id_Menu=?";
  $query=$conn->prepare($sql); 
  $query->bindValue(1,$id_menu);
  $query->execute();
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $result=$query->fetchAll();
  return json_encode($result);
}
public function listaMenu(){
  $conn=parent::conexion();
  $sql="SELECT
  SubMenu.id_Menu,
  SubMenu.nombre_Menu,
  SubMenu.menuPadre_Menu,
  SubMenu.descripcion_Menu,
  MenuPadre.categoria_MenuPadre
  FROM SubMenu 
  INNER JOIN MenuPadre  
  ON SubMenu.menuPadre_Menu= MenuPadre.id_MenuPadre
  ";
  $query=$conn->prepare($sql); 
  $query->execute();  
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $result=$query->fetchAll();
  return $result;
}
public function listaMenuNombre($nombre_menu){
  $conn=parent::conexion();
  $sql="SELECT
  SubMenu.id_Menu,
  SubMenu.nombre_Menu,
  SubMenu.menuPadre_Menu,
  SubMenu.descripcion_Menu,
  MenuPadre.categoria_MenuPadre
  FROM SubMenu 
  INNER JOIN MenuPadre
  ON SubMenu.menuPadre_Menu= MenuPadre.id_MenuPadre
  WHERE SubMenu.nombre_Menu=?
  ";
  $query=$conn->prepare($sql); 
  $query->bindValue(1,$nombre_menu);
  $query->execute();
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $result=$query->fetchAll();
  return  $result;
}
public function infoMenuId($id_menu){
  $conn=parent::conexion();
  $sql="SELECT * FROM SubMenu WHERE id_Menu=? ";
  $query=$conn->prepare($sql);
  $query->bindValue(1,$id_menu);
  $query->execute();
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $result=$query->fetchAll();
  return json_encode($result);
}
}
?>
