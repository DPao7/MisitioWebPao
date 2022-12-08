<?php
include('../config/config.php'); /* LLAMAMOS CONFIG DE URLS */
include('../config/database.php'); /* CONEXION A LA BD */


class clientes{
    public $conexion;

    function __construct(){
        $db= new Database(); 
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombres= $params['nombres']; 
        $apellidos= $params['apellidos'];
        $direccion= $params['direccion'];
        $Edad= $params['Edad'];
        $servicio = $params['servicio'];
        $telefono = $params['telefono'];

        $insert= "INSERT INTO clientes VALUES (NULL, '$nombres', '$apellidos', '$direccion', '$Edad', '$servicio', '$telefono')"; 

        return mysqli_query($this->conexion, $insert); 

    }

  function getAll(){
        $basededatos= "SELECT * FROM clientes"; 
        return mysqli_query($this->conexion, $basededatos);
    }
 
    function getOne($id){
        $sql = "SELECT * FROM clientes WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
      }
    function update($params){
        $nombres= $params['nombres']; 
        $apellidos= $params['apellidos'];
        $direccion= $params['direccion'];
        $Edad= $params['Edad'];
        $servicio = $params['servicio'];
        $telefono = $params['telefono'];
        $id = $params['id'];
  
        $update = " UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', direccion='$direccion', Edad='$Edad', servicio='$servicio', telefono='$telefono' WHERE id = $id";
        return mysqli_query($this->conexion, $update);
      }
  
    function delete($id){
        $eliminar= "DELETE FROM clientes WHERE id = $id"; 
        return mysqli_query($this->conexion, $eliminar);
    } 

}



?>