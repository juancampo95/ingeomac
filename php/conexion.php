<?php
class conexion{
  protected $servername = "localhost";
  protected $username = "root";
  protected $pass = "";
  protected $bdName = "ingeomac_multir";
  public $conexion;

  public function __construct(){
    $this->conexion = new mysqli($this->servername,$this->username,$this->pass,$this->bdName);
    if($this->conexion->connect_error){
      die("La conexión falló" . $this->conexion->connect_error);
    }
  }
}
 ?>
