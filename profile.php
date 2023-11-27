<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("Location: /login.php");
    }

require_once 'header.php'
?>

<div class="container my-5">
    <p><strong>Имя: </strong><span><?= $_SESSION['name'] ?></span></p>
    <p><strong>Фамилия: </strong><span><?= $_SESSION['lastname'] ?></span></p>
    <p><strong>Email: </strong><span><?= $_SESSION['email'] ?></span></p>
    <p><strong>ID: </strong><span><?= $_SESSION['id'] ?></span></p>
</div>

<?php
require_once 'footer.php'
?>
