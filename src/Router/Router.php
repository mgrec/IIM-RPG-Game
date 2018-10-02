<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 02/10/2018
 * Time: 23:34
 */

namespace App\Router;


class Router
{
    private $url;
    private $routes             = [];

    public function __construct($url)
    {
        $this->url              = $url;
    }

    public function get($path, $callable)
    {
        $route                  = new Route($path, $callable);
        $this->routes["GET"][]  = $route;
    }

    public function post($path, $callable)
    {
        $route = new Route($path, $callable);
        $this->routes["POST"][] = $route;
    }

    public function run()
    {
        if (!isset($this->routes[$_SERVER["REQUEST_METHOD"]])) {
            throw new \Exception('Request method does not exist');
        }
        foreach ($this->routes[$_SERVER["REQUEST_METHOD"]] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }
        throw new \Exception('No route matches');
    }
}