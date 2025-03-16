<?php
    require 'routes/routes.php';

    $page = $_GET['page'] ?? 'home';
    $route->handleRequest($page);
?>