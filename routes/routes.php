<?php
    session_start();
    require './routes/route.php';
    $route = new Route();

    $route->add('home', 'frontend/page/home.php');
    $route->add('login', 'frontend/page/login.php');
    $route->add('register', 'frontend/page/register.php');
    $route->add('store', 'frontend/page/system/store.php');
    $route->add('profile', 'frontend/page/system/profile.php');
    $route->add('payment', 'frontend/page/system/payment.php');
    $route->add('logout', 'backend/config/logout.php');
?>