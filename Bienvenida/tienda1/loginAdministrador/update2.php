<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$id_categoria=$_POST['id_categoria'];
$activos=$_POST['activos'];

$sql="UPDATE productos2 SET  nombre='$nombre',descripcion='$descripcion', precio='$precio' , id_categoria='$id_categoria' , activos='$activos' 
WHERE id='$id'";
$query=mysqli_query($con,$sql);



    if($query){
        Header("Location: alumno2.php");
    }
?>