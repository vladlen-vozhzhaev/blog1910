<?php
session_start(); // Стартуем сессию, чтобы иметь доступ к переменной $_SESSION
//$path = $_SERVER['REQUEST_URI']; // Получаем uri который запросил пользователь например /reg или /login
$path = explode('/', $_SERVER['REQUEST_URI']);
$content = "Страница не найдена 404"; // в template.php будет написано "Страница не найдена 404"
$mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
require_once 'php/classes/User.php'; // Подключаем файл User.php в роутер
require_once 'php/classes/Blog.php';
if($path[1] == ""){
    $content = file_get_contents('views/mainPage.html');
}else if($path[1] == 'reg' and $_SERVER['REQUEST_METHOD'] == 'GET'){
    $content = file_get_contents('views/reg.html');
}else if($path[1] == 'reg' and $_SERVER['REQUEST_METHOD'] == 'POST'){
    exit(User::reg());
}else if($path[1] == 'login' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $content = file_get_contents('views/login.html');
}else if($path[1] == 'login' and $_SERVER['REQUEST_METHOD'] == "POST"){
    exit(User::login());
}else if($path[1] == 'profile'){
    $content = file_get_contents('views/profile.html');
}else if($path[1] == 'getArticles'){
    exit(Blog::getArticles());
}else if($path[1] == 'blog'){
    $content = file_get_contents('views/article.html');
}else if($path[1] == 'getArticle'){
    exit(Blog::getArticle($path[2]));
}else if($path[1] == 'addArticle' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $content = file_get_contents('views/addArticle.html');
}else if($path[1] == 'addArticle' and $_SERVER['REQUEST_METHOD'] == 'POST'){
    exit(Blog::addArticle());
}

require_once 'template.php';