<?php
    require './routes/route.php';
    $route = new Route();

    $route->add('home', 'frontend/page/home.php');
    $route->add('login', 'frontend/page/login.php');
    $route->add('register', 'frontend/page/register.php');
?>