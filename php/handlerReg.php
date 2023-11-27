<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
    if($result->num_rows){
        echo "exist"; // Существует
    }else{
        $mysqli->query("INSERT INTO users (name, lastname, email, pass) VALUES ('$name','$lastname','$email','$pass')");
        echo "success!";
    }