<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$id_categoria=$_POST['id_categoria'];
$activos=$_POST['activos'];


$sql="INSERT INTO productos2 VALUES('$id','$nombre','$descripcion','$precio','$id_categoria' ,'$activos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno2.php");
    
}else {
}
?>