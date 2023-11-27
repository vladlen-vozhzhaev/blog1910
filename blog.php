<?php
    $id = $_GET['id'];
    $mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
    $result = $mysqli->query("SELECT * FROM articles WHERE id='$id'");
    $row = $result->fetch_assoc();
    require_once 'header.php';
?>
		<div class="container my-5">
            <h3><?php echo $row['title'] ?></h3>
            <div><?php echo $row['content'] ?></div>
            <p><?php echo $row['author'] ?></p>
		</div>
<?php
require_once 'footer.php'
?>