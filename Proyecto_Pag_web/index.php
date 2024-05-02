<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--INICIO DE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&display=swap" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/> -->

    <!--FIN DE FONT-->
    
    
    <title>UCSP - Panadería</title>
    <link rel="shortcut icon" href="img/extras/lg.png">
    <link rel="stylesheet" href="style.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!------Swipers-------->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min. css"/> -->
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="logo.png" alt=""></a>
        <!-- <bx class="bx bx-menu" id="menu-icon"></bx> -->
        <ul class="navbar">
            <li><a href="#">Inicio</a></li>
            <li><a href="#acerca">Acerca</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#reseñas">Reseñas</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <div class="header-btn">
        <?php 
            session_start(); // Iniciar la sesión
            // Verificar si el usuario ha iniciado sesión
            if(isset($_SESSION['usuario'])) {
                $usuario = $_SESSION['usuario'];
                echo "¡Hola, $usuario!"; // Mostrar mensaje de bienvenida con el nombre del usuario
            } else {
                // Mostrar botones de registro y login
            ?>
                <a href="registro.php">Registrarse</a>
                <a href="login.html" class="sign-in">Iniciar sesión</a>
                <?php 
                }
            ?>
        </div>  

    </header>
    
    <!-- Home INICIO-->
    <section class="home" id="home">
        <div class="contenido">
            <h3>Cada postre es una <span>obra de arte</span> que deleita tus sentidos y despierta tus <span>emociones</span> más dulces.</h3>
            <p>Encuentra nuestros productos</p>
            <div class="btn">
            <a href="#" class="shop"><i class='bx bxs-coffee-togo'></i> ¡ CLICK ACA ! <i class='bx bx-baguette' ></i></a>
            </div>
        </div>
    </section>
    <!-- Home FIN-->
    <!-- ACERCA INICIO-->
    <section class="acerca" >
        <h1 class="head" id="acerca">Acerca de <span>Nosotros</span></h1>
        <div class="img-cont">
            <div class="content">
                <h3>Calidad de nuestros productos</h3>
                <p>La calidad es nuestra máxima prioridad. 
                Desde el proceso de selección de ingredientes hasta 
                la elaboración de cada producto, nos aseguramos de 
                que todo se haga con los más altos estándares de 
                calidad.</p>
                <h1>¡Ven a probar la diferencia!</h1>
            </div>
            <div class="cont-img" id="cont-img">
                <img src="img/extras/img1.jpg" alt="">
            </div>
        </div>
        <div class="img-cont2">
            <div class="cont-img">
                <img src="img/extras/img2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Variedad de opciones</h3>
                <p>En nuestra pastelería, sabemos que 
                    todos tienen gustos y necesidades diferentes. 
                    Es por eso que ofrecemos opciones sin gluten, 
                    veganas y para diabéticos, para que todos puedan 
                    disfrutar de nuestros productos.</p>
                <h1>¡Hay gran variedad!</h1>
            </div>
        </div>
    </section>
    <!-- ACERCA FIN-->

    
    <!-- Productos -->
    <h1 class="head" id="menu">Menu</h1>
    <section class="products" >
        <!-- Productos Panes -->
        <div class="heading">
            <h1>Panes</h1>
        </div>
        <div class="product-container">
            <!-- box 1 -->
            <div class="box">
                <img src="img/Pan/baguette.png" alt="">
                <h2>Baguette</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 2 -->
            <div class="box">
                <img src="img/Pan/ciabata.png" alt="">
                <h2>Ciabata</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 3 -->
            <div class="box">
                <img src="img/Pan/trensado.png" alt="">
                <h2>Trensado</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
        </div>

        <br /><br />
        <!-- Productos Especiales-->
        <div class="heading">
            <h1>Especiales</h1>
        </div>
        <div class="product-container">
            <!-- box 1 -->
            <div class="box">
                <img src="img/Especiales/canela.jpg" alt="">
                <h2>Canela</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 2 -->
            <div class="box">
                <img src="img/Especiales/chocolate.jpg" alt="">
                <h2>Chocolate</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 3 -->
            <div class="box">
                <img src="img/Especiales/guagua.jpg" alt="">
                <h2>Guagua</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 4 -->
            <div class="box">
                <img src="img/Especiales/croissants.jpg" alt="">
                <h2>Croissants</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
        </div>

        <br /><br />
        <!-- Producto Tortas -->
        <div class="heading">
            <h1>Tortas</h1>
        </div>
        <div class="product-container">
            <!-- box 1 -->
            <div class="box">
                <img src="img/Tortas/torta-chocolate.jpg" alt="">
                <h2>Torta Chocolate</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 2 -->
            <div class="box">
                <img src="img/Tortas/torta_vainilla.png" alt="">
                <h2>Torta Vainilla</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
            <!-- box 3 -->
            <div class="box">
                <img src="img/Tortas/torta_zanahoria.jpg" alt="">
                <h2>Torta Zanahoria</h2>
                <h3>DESCRIPCION</h3>
                <h3 class="price">$7.99</h3>
                <i class="bx bx-cart-alt"></i>
            </div>
        </div>
    </section>

<!-- Link to JS no en uso por ahora creo xd -->
    <script src="main.js"></script>
</body>
</html>