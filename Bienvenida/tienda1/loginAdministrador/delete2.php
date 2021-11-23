<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM productos2  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno2.php");
    }
?>
