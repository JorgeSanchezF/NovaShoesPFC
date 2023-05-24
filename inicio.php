<?php

require_once('Database.php');
$database = new Database();

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaShoes</title>
    <link rel="stylesheet" href="style.css">    
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar">
        <div class="navbar-brand">
            <a class="logo" href="#">NovaShoes</a>
        </div>
        <div class="user-profile">
            <img src="profile-pic.jpg" alt="Foto de perfil" class="profile-pic" id="dropdownMenuLink">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="session/auth/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </div>
        </div>
    </header>
    <img id="imagen cabecera" src="IMAGENES/MjAkqo.jpg" alt="">
    <nav>
        <div class="barra">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="productos.php">PRODUCTOS</a></li>
                <li><a href="cesta.php">CESTA</a></li>
                <li><a href="inicio.php">SESION</a></li>
            </ul>
        </div>
    </nav>
    <main class="sesion">
        <button class="Iboton"><a class="iyr" href="session/auth/login.php">Iniciar Sesion</a></button>
        <button class="Rboton"><a class="iyr" href="session/auth/register.php">Registrarse</a></button>
        <script src="script.js"></script>
    </main>
    
</body>
<footer>
        <section>
            <div>HORARIOS</div>
            <div>Lunes-Viernes: 8:00 a 21:00</div>
            <div>Sabados y Domingos: 10:00 a 20:00</div>
            <div>Festivos: Cerrado</div>
            <div>-------------------------------------------</div>
            <div>TELEFONO DE CONTACTO</div>
            <div> 910 586 099</div>
        </section>
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.53864926123!2d-3.708754284495557!3d40.441213562073756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422859a253fb6d%3A0x3f6c1c9f52eda243!2sBasket%20Revolution!5e0!3m2!1ses!2ses!4v1669971505506!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="iconos">
            <div><a class="icon" href="https://www.youtube.com/@BasketRevolutionStore"><i class="fab fa-youtube"></i></a></div>
            <div>/</div>
            <div><a class="icon" href="https://twitter.com/Bskt_Revolution"><i class="fab fa-twitter"></i></a></div>
            <div>/</div>
            <div><a class="icon" href="https://www.instagram.com/basketrevolution/"><i class="fab fa-instagram"></i></a></div>
        </section>
    </footer>

</html>