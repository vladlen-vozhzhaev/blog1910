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
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['pass'])){
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['img'] = $row['img'];
            return json_encode(['result'=>'success']);
        }else{
            return json_encode(['result'=>'error']);
        }
    }
    public static function changeUserAvatar(){
        global $mysqli;
        $userId = $_SESSION['id'];
        $userAvatar = $_FILES['user_avatar'];
        $dir = 'img/user_avatar/'.md5(microtime()).$userAvatar['name'];
        if($userAvatar['type'] == "image/jpeg"){
            move_uploaded_file($_FILES['user_avatar']['tmp_name'], $dir);
            $mysqli->query("UPDATE users SET img='/$dir' WHERE id = '$userId'");
            $_SESSION['img'] = "/$dir";
            header('Location: /profile');
        }else{
            echo "Недопустимое расширение файла";
        }
    }
}