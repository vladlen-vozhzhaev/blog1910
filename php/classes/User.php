<?php
class User{
    public static function reg(){
        global $mysqli;
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
        if($result->num_rows){
            return json_encode(['result'=>"exist"]); // Существует
        }else{
            $mysqli->query("INSERT INTO users (name, lastname, email, pass) VALUES ('$name','$lastname','$email','$pass')");
            return json_encode(['result'=>"success!"]);
        }
    }
    public static function login(){
        global $mysqli;
        session_start();
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['pass'])){
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            return json_encode(['result'=>'success']);
        }else{
            return json_encode(['result'=>'error']);
        }
    }
}