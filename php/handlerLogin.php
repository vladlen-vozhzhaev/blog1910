<?php
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    $row = $result->fetch_assoc();
    if(password_verify($pass, $row['pass'])){
        $_SESSION['name'] = $row['name'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        echo "Фамилия: ".$row['lastname']."<br>Имя: ".$row['name'];
    }else{
        echo "Неправильный логин или пароль";
    }