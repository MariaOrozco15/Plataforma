<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$imagen=$_POST['imagen'];
$id_categoria=$_POST['id_categoria'];
$activos=$_POST['activos'];

$sql="UPDATE productos SET  nombre='$nombre',descripcion='$descripcion', precio='$precio', imagen='$imagen' , id_categoria='$id_categoria' , activos='$activos' 
WHERE id='$id'";
$query=mysqli_query($con,$sql);



    if($query){
        Header("Location: alumno.php");
    }
?>