<?php
$path = $_SERVER['REQUEST_URI'];
$content = "Страница не найдена 404";
if($path == '/reg'){
    $content = file_get_contents('views/reg.html');
}else if($path == '/login'){
    $content = file_get_contents('views/login.html');
}

require_once 'template.php';