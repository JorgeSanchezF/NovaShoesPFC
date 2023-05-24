<?php
// 0. Inicio sesion o continuo con sesion iniciada
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
  // Existe
  if($_SESSION['user']['rol_id'] == 1){
  // 3. Si session iniciada y rol de usuario, te mando al usuario
  header('Location: ../private/dashboard.php');
  }else{
    // 4. Si session iniciada y rol admin, todo ok
    // Fabuloso
  }
}else{
  // 2. Si no esta iniciada, te mando al login
  header('Location: ../auth/login.php');
}
?>

<?php

require_once('../../Database.php');
$database = new Database();
$resultado = $database->getAll();

$resultado = $database->getClientes();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Página web</title>
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<header>
        <nav class="navbar">
        <div class="navbar-brand">
            <a class="logo" href="#">NovaShoes</a>
        </div>
        <div class="user-profile">
            <img src="profile-pic.jpg" alt="Foto de perfil" class="profile-pic" id="dropdownMenuLink">
            <a href="#" class="username" id="dropdownMenuLink"><?php echo $_SESSION['user']['nombre'] ?> <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Ver perfil</a>
            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Ajustes</a>
            <a class="dropdown-item" href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </div>
        </div>
    </header>
    <img id="imagen cabecera" src="../../IMAGENES/MjAkqo.jpg" alt="">
    <nav>
        <div class="barra">
            <ul>
                <li><a href="dashboard-user.php">INICIO</a></li>
                <li><a href="../../productos.php">PRODUCTOS</a></li>
                <li><a href="../../cesta.php">CESTA</a></li>
                <li><a href="../../inicio.php">SESION</a></li>
            </ul>
        </div>
    </nav>
    <main>

    <div class="slide">

<div class="slide-inner">

    <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">

    <div class="slide-item">
        <img src="../../IMAGENES/Luka Reverse Orca.png">
    </div>

    <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">

    <div class="slide-item">
        <img src="../../IMAGENES/Giannis Immortality 2.png">
    </div>

    <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">

    <div class="slide-item">

        <img src="../../IMAGENES/Lebron XX Trinity.png">

    </div>

    <label for="slide-3" class="slide-control prev control-1">‹</label>

    <label for="slide-2" class="slide-control next control-1">›</label>

    <label for="slide-1" class="slide-control prev control-2">‹</label>

    <label for="slide-3" class="slide-control next control-2">›</label>

    <label for="slide-2" class="slide-control prev control-3">‹</label>

    <label for="slide-1" class="slide-control next control-3">›</label>

    <ol class="slide-indicador">

        <li>

            <label for="slide-1" class="slide-circulo">•</label>

        </li>

        <li>

            <label for="slide-2" class="slide-circulo">•</label>

        </li>

        <li>

            <label for="slide-3" class="slide-circulo">•</label>

        </li>

    </ol>

</div>


</div>
    </main>

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
</body>
</html>
