<?php
session_start();
$mysqli = new mysqli("127.0.0.1", "root", "", "blog1910");
$result = $mysqli->query("SELECT * FROM articles");
require_once 'header.php';
?>


		<div class="container my-5">
            <?php while (($row = $result->fetch_assoc()) != null): ?>
                <h3><a href="/blog.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h3>
                <div><?php echo $row['content'] ?></div>
                <p><?php echo $row['author'] ?></p>
                <hr>
            <?php endwhile; ?>
		</div>

<?php
require_once 'footer.php'
?>