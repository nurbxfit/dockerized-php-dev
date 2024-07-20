<?php

require '../App/ErrorController.php';
$error_controller = new ErrorController;

$method = strtolower($_SERVER['REQUEST_METHOD']);
$path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$path_parts = explode("/",parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

if($path == '/' && $method == 'get'){
    require '../App/HomeController.php';
    $home_controller = new HomeController;
    $home_controller->get();
}else if ($path == '/movies' && $method == 'get' ){

    require '../App/MovieController.php';
    $movie_controller = new MovieController;
    $movie_controller->get();
}else {
    $error_controller->notFound();
    exit();
}


