<?php
include('data/conexion.php');

$obj =new Conexion;

$res = $obj->buscarProducto();
$temp=array();
$temp=$res;

print("Id producto:". $temp[0]['id:producto'].'<br>');
print("nombre:". $temp[0]['nombre_producto'].'<br>');
print("descripcion:". $temp[0]['descripcion_producto'].'<br>');
print("<img src=" . $temp[0]['url_img'] . ' width="150">');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Store</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<header class="site-header inicio">
<div class="contenedor">
<div class="barra">
<div class="barra-img"><img src="img/smartphones.png" height="45px" width="45px"></div>
<nav class="navegacion">
    <a href="Accesorios.html">Accesorios</a>
    <a href="Productos.html">Productos</a>
    <a href="Metodosdepago.html">Metodos de pago</a>
    <a href="Blog.html">Blog</a>
    <a href="contacto.html">Contacto</a>
</nav>
</div>
</div>
</header>


    <section class="contenedor-seccion" class="fw-300 centrar-texto">
        <h2 class="fw-300 centrar-texto" style=" font-family: serif;"> Explora nuestros nuevos diseños </h2>

        <div class="iconos-nosotros" class="fw-300 centrar-texto">
            <div class="icono">
                <div class="img"><img src="img/!phone11promax.png" width="225px" height="225px"></div>
                <p class="parrafo1"><?php echo $temp[0]['nombre_producto'];?></p>
                <p class="parrafo1">$28,299.00</p>
                <a href="!Phone_11_Pro_Max.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
                <div class="img"><img src="img/iphone-xr-yellow.png" width="225px" height="225px"></div>
                <p class="parrafo1">iPhone XR</p>
                <p class="parrafo1">$15,449.00</p>
                <a href="!Phone_XR.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
                <div class="img"><img src="img/iphone xs max.png" width="225px" height="225px"></div>
                <p class="parrafo1">iPhone XS Max</p>
                <p class="parrafo1">$22,249.00</p>
                <a href="!Phone_XS_Max.html" class="boton">Ver Producto</a>
            </div>
        </div>

        <br>
        <br>
    </section>


    <footer class="fondo">
        <p>Copyrigth &copy; 2019 IPHONEWORDL | Todos los derechos reservados</p>
    </footer>

</body>

</html>