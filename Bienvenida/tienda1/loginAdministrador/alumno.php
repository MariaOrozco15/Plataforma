<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADMINISTRADOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                 <a class="navbar-brand" href="alumno2.php">CATEGORIA CALZADO</a>
                </nav>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                   
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Ingrese nombre">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Ingrese descripcion">
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="Ingrese precio">
                                    <input type="file" class="form-control mb-3" name="imagen" >
                                    <input type="number" class="form-control mb-3" name="id_categoria" placeholder="numero de categoria">
                                    <input type="number" class="form-control mb-3" name="activos" placeholder="Cuantos estan activos">
                                

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>imagen</th>
                                        <th>id_categoria</th>
                                        <th>activos</th>
                                    
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><?php  echo $row['imagen']?></th>  
                                                <th><?php  echo $row['id_categoria']?></th>  
                                                <th><?php  echo $row['activos']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>