<?php
/*
    Author: Khabusev Phanis
    E-mail: p.m.khabusev@yandex.ru
    Project: Интернет-магазин из курса PHP-up
*/

// Router
class Router
{
    private $routes;
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = require_once( $routesPath );
    }
    public function run()
    {
        echo "Test ". __CLASS__ ."! Call method " . __METHOD__ . " is OK!\n";
        print_r($this->routes);
    }
}