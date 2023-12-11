<?php
session_start(); // Стартуем сессию, чтобы иметь доступ к переменной $_SESSION
//$path = $_SERVER['REQUEST_URI']; // Получаем uri который запросил пользователь например /reg или /login
$path = explode('/', $_SERVER['REQUEST_URI']);

$mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
require_once 'php/classes/User.php'; // Подключаем файл User.php в роутер
require_once 'php/classes/Blog.php';
require_once 'php/classes/Route.php';

Route::view("/", 'views/mainPage.html');
Route::view("/reg", 'views/reg.html');
Route::view('/login', 'views/login.html');
Route::view('/profile','views/profile.html');
Route::view('/blog', 'views/article.html');
Route::view('/addArticle', 'views/addArticle.html');

Route::get('/getArticles', function (){return Blog::getArticles();});
Route::get('/getArticle', function (){global $path; return Blog::getArticle($path[2]);});

Route::post('/reg', function(){return User::reg();});
Route::post('/login', function (){return User::login();});
Route::post('/addArticle', function (){return Blog::addArticle();});