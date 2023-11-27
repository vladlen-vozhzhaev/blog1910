<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
    $mysqli->query("INSERT INTO articles (title, content, author) VALUES ('$title','$content','$author')");
    header("Location: /");