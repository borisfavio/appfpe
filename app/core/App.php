<?php

namespace app\core;

class App
{
    protected $controller = 'ProductController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Configura el controlador
        if (file_exists(__DIR__ . '/../controllers/' . $url[0] . 'Controller.php')) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }

        $controllerNamespace = "\\app\\controllers\\" . $this->controller;
        $this->controller = new $controllerNamespace;

        // Configura el método
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Configura los parámetros
        $this->params = $url ? array_values($url) : [];

        // Llama al método con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
