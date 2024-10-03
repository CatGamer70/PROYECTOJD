<?php
$host="localhost:3306";
$user="root";
$clave="";
$bd="negocio";
$conexion=mysqli_connect($host,$user,$clave,$bd);
if(mysqli_connect_errno()){
    echo "No se pudo realizar la conexion a la Base de Datos";
    exit();
}
mysqli_select_db($conexion,$bd)or die("No se encuentra la Base de Datos");
mysqli_set_charset($conexion,"utf8");
?>