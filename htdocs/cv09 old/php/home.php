<?php

require_once('.\database\databaseloader.php');
require_once('router.php');
require_once('imageLoader.php');
require_once('./components/component.php');


function home_handler() {
    include('./sites/home.php');
}

function about_handler() {

    include('./sites/regi.php');
}

global $routes;

$routes = array(
    '/www/tynk00/cv09/' => 'home_handler',
    '/www/tynk00/cv09/regi' => 'about_handler',
);

$url = $_SERVER['REQUEST_URI'];
route($url, $routes);




?>