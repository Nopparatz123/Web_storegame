<?php
class Route {
    private $routes = [];

    public function add($route, $file) {
        $this->routes[$route] = $file;
    }

    public function handleRequest($request) {
        if (array_key_exists($request, $this->routes)) {
            require $this->routes[$request];
        } else {
            http_response_code(404);
            require './frontend/404.php'; // โหลดหน้า 404
            exit;
        }
    }
}
?>
