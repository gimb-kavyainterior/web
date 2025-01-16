<?php

include "constant.php";

$page_name = $_SERVER['SCRIPT_NAME'];
$index =  str_contains($page_name, 'index.php') ? 'active' : '';
$about =  str_contains($page_name, 'about.php') ? 'active' : '';
$services = str_contains($page_name, 'services.php') ? 'active' : '';
$contact = str_contains($page_name, 'contact.php') ? 'active' : '';
$team =  str_contains($page_name, 'team.php') ? 'active' : '';


?>

<header id="header" class="header  sticky-top ">
    <div class="container-xl  d-flex  justify-content-bet">

        <a href="./" class="logo  container-fluid d-flex align-items-center kavya-logo position-relative">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/kd1.png" >
            <!-- <h1 class="sitename">Kavya Interior</h1> -->
        </a>

        <nav id="navmenu" class="navmenu  float-end">
            <ul>
                <li><a href="./" class=<?= $index ?>>Home</a></li>
                <li><a href="http://kavya-gallery.myartsonline.com/">Gallery</a></li>
                <li><a href="services.php" class=<?= $services ?>>Services</a></li>
                <li><a href="about.php" class=<?= $about ?>>About</a></li>
                <li><a href="team.php"  class=<?= $team ?>>Team</a></li>
                <li><a href="contact.php" class=<?= $contact ?>>Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>