<?php
class Route{
    // Метод отвечает за отображение html файла
    public static function view($path, $fileName){
        //$uri = explode('/', $_SERVER['REQUEST_URI']);
        $content = "Страница не найдена 404"; // в template.php будет написано "Страница не найдена 404"
        if($path == $_SERVER['REQUEST_URI'] and $_SERVER['REQUEST_METHOD'] == "GET"){
            $content = file_get_contents($fileName);
            require_once 'template.php';
        }
    }

    // Метод обрабатывает запросы поступившие методом get
    public static function get($path, $handler){
        if($path == $_SERVER['REQUEST_URI'] and $_SERVER['REQUEST_METHOD'] == "GET"){
            exit($handler());
        }
    }

    // Метод обрабатывает запросы поступившие методом post
    public static function post($path, $handler){
        if($path == $_SERVER['REQUEST_URI'] and $_SERVER['REQUEST_METHOD'] == "POST"){
            exit($handler());
        }
    }
}