<?php
    session_start();
    require './assets.php';
    require './routes/route.php';
    $route = new Route();

    $route->add('home', 'frontend/page/home.php');
    $route->add('login', 'frontend/page/login.php');
    $route->add('register', 'frontend/page/register.php');
    $route->add('store', 'frontend/page/system/store.php');
    $route->add('dashboard', 'frontend/admin/dashboard.php');
    $route->add('profile', 'frontend/page/system/profile.php');
    $route->add('payment', 'frontend/page/system/payment.php');
    $route->add('contact', 'frontend/page/system/contact.php');
    $route->add('topup', 'frontend/page/system/topup.php');
    $route->add('redeem', 'frontend/page/system/redeem.php');
    $route->add('dt_category', 'frontend/page/system/dt_category.php');
    $route->add('logout', 'backend/config/logout.php');
    $route->add('topupProcess', 'backend/system/topup_process.php');
?>