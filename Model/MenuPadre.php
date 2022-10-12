<?php
class MenuPadre extends Conectar{
  public function listaPadre(){
    $conn=parent::conexion();
    $sql="SELECT * FROM MenuPadre";
    $query=$conn->prepare($sql);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $result=$query->fetchAll();
    return$result;
  }

}
?>