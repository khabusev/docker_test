<?php
/*
    Author: Khabusev Phanis
    E-mail: p.m.khabusev@yandex.ru
    Project: Интернет-магазин из курса PHP-up
*/

// Front Controller

// 1.  Общие настройки

// 1.1  Включение ошибок для разработки
ini_set('display_errors', 1 );
error_reporting(E_ALL);

// 2.  Подключение файлов системы
define( 'ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

// 3.   Вызов Router
$router = new Router();
$router->run();

$url = '/news/123';

$pattern = '/^\/news\/(\d+)$/';
$result = preg_match( $pattern, $url, $matches );


if( $result )
    print_r( $matches );
