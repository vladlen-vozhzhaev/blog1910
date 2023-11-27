<?php
$login = $_POST["login"];
$pass = $_POST["pass"];

if($login == "admin" && $pass == "123"){
    echo "Доступ разрешен ADMIN";
}else if($login == "user" && $pass == "321"){
    echo "Доступ разрешен User";
}else{
    echo "Доступ запрещен";
}