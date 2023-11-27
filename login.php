<?php
require_once 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center my-3">Авторизация на сайте</h1>
    <div class="col-sm-6 mx-auto">
        <form action="/php/handlerLogin.php" method="post">
            <div class="mb-3">
                <input required name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input required name="pass" type="password" class="form-control" placeholder="Пароль">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Войти">
            </div>
        </form>
    </div>
</div>
<?php
require_once 'footer.php'
?>