<?php
namespace Core;
class Router{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];


    public function define($routes){
        $this->routes = $routes;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $method){
        // if(array_key_exists($uri, $this->routes[$method])){
        //     die($this->routes[$method][$uri]);
        // }

        return $this->callAction(...explode('@', $this->routes[$method][$uri]));
    }

    public function callAction($controller, $action){
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(!method_exists($controller, $action)){
            throw new Exception("{$controller} does not respond to the {$action}");
        }
        return $controller->$action();
    }
}