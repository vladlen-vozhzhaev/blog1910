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
        // Create a DOM object
        $html = new simple_html_dom();
        // Load HTML from a string
        $html->load($content);
        $img = $html->find('img', 0);
        $src = $img->src;
        $base64DATA = explode(',', $src)[1];
        //data:image/jpeg;base64
        $extension = explode(';',explode('/', explode(',', $src)[0])[1])[0];
        $dir = "img/blog_image/".md5(microtime()).'.'.$extension;
        $ifp = fopen( $dir, 'wb' );
        fwrite($ifp, base64_decode($base64DATA));
        fclose($ifp);
        $img->src = '/'.$dir;
        $mysqli->query("INSERT INTO articles (title, content, author) VALUES ('$title','$html','$author')");
        return json_encode(['result'=>'success']);
    }
}