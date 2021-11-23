    <?php

    require 'database.php';
    $db=new Database();
    $con = $db->conectar();


    $sql = $con->prepare("SELECT id, nombre, precio, descripcion,imagen FROM productos WHERE activos=1");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/nuevo.css">
    <link rel="stylesheet" href="css/body.css">

    <title>Tienda</title>
</head>

<body class="body">

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">Tienda deportiva</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div >

                        <ul >
                         
                            <a href="categoria1.php"><button>Calzados</button></a>
                            <a href="categoria2.html"><button>Accesorios</button></a>
                            <a href="categoria3.html"><button>Ropa</button></a>

                       </ul>
                       <a class="botonAdmi"  href="loginAdministrador/index.html"><button>Administrador</button></a>
                      

                    </div>
  
                    <div class="contenedor">

                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                        width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"></img>
                                    <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                        <table id="lista-carrito" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Precio</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
    
                                        <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                        <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                            Compra</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
    
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Los productos mas vendidos</p>
        </div>
       
        <div class="container" id="lista-productos">
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
                <?php foreach($resultado as $row) { ?>  
                    <?php
                            
                            $id =$row['id'];
                            $imagen = "imagen1/productos/" . $id  . "/Mujer.jpg";
                            
                            if (!file_exists($imagen)) {
                                # code...
                                $imagen ="imagen1/NO_disponible.jpg";
                            }
                    ?>
                            

                                <div class="card mb-3 ">
                    
                                            <div class="card shadow-sm">
                                            
                                                    <h4  class="nombre" class="my-0 font-weight-bold"><?php echo $row['nombre']; ?> </h4>
                                                    </div>
                                                    <div class="card-body">
                                                     <img src="<?php echo $imagen; ?>" class="card-img-top">
                                                     
                                                    <h1 class="precio" class="card-title pricing-card-title precio">C$ <span class=""><?php echo number_format( $row['precio'], 2,'.', ','); ?></span></h1>

                                                    <ul class="list-unstyled mt-3 mb-3">
                                                    <h5 class="descripcion" class="card-title"><?php echo $row['descripcion']; ?></h5>
                                                    </ul>
                                                    <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $id; ?>">agregar al carrito</a>
                                            
                                            </div>
                                        

                                </div>


             <?php } ?>

               


        </div>
        
    </main>
    <hr>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
      
         <a href="politicas/poli.html">politicas y privacidad</a>
      </div>
    </div>
   

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

</body>

</html>