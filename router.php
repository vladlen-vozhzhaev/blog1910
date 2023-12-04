<?php
$path = $_SERVER['REQUEST_URI'];
$content = "Страница не найдена 404";
$mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
require_once 'php/classes/User.php';
if($path == '/reg' and $_SERVER['REQUEST_METHOD'] == 'GET'){
    $content = file_get_contents('views/reg.html');
}else if($path == '/reg' and $_SERVER['REQUEST_METHOD'] == 'POST'){
    exit(User::reg());
}else if($path == '/login' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $content = file_get_contents('views/login.html');
}else if($path == '/login' and $_SERVER['REQUEST_METHOD'] == "POST"){
    exit(User::login());
}else if($path == '/profile'){
    $content = file_get_contents('views/profile.html');
}

require_once 'template.php';