<?php

namespace src\Core;

use TeaLovers\TeaChat\Controller\ChatController;
use TeaLovers\TeaChat\Controller\LoginController;

class Router
{
    private array $routes = [
        '/' => [ChatController::class],
        '/login' => [LoginController::class],
        '/logout' => [LoginController::class, 'logoutAction'],
    ];

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];

        if (!isset($this->routes[$uri])) {
            echo '404';
            return;
        }

        $controller = new $this->routes[$uri][0];
        $action = $this->routes[$uri][1] ?? 'mainAction';
        $controller->$action();
    }
}
