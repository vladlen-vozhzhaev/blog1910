<?php
class Blog{
    public static function getArticles(){
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM articles");
        $articles = [];
        while (($row = $result->fetch_assoc()) != null){
            $articles[] = $row;
        }
        return json_encode($articles);
    }
    public static function getArticle($articleId){
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM articles WHERE id='$articleId'");
        $article = $result->fetch_assoc();
        return json_encode($article);
    }
    public static function addArticle(){
        global $mysqli;
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $mysqli->query("INSERT INTO articles (title, content, author) VALUES ('$title','$content','$author')");
        return json_encode(['result'=>'success']);
    }
}