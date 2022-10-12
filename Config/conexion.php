<?php
class Conectar{
  public function conexion($db='db.sqlite'){
    try{
      $rutadb='../db/'.$db;
      $conexion=new PDO('sqlite:'.$rutadb);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexion;
    }catch(Exception $error){
      return print_r( $error->getMessage());
    }
  }
}

?>