
<?php
require 'database.php';

if(isset($_GET['id'])) {
    $article_id = $_GET['id'];

    $query = $pdo->prepare("SELECT * FROM form1 WHERE id = ?");
    $query->execute([$article_id]);
    $article = $query->fetch();
}


?>

    
    <div class="container">
    <h4>Вакансия</h4>
    <p class="text-info"><?php echo $article['nick']?>  <?php echo $article['textarea']; ?></p>
    <span><?php echo $article['name']; ?></span>

    <style type="text/css">
<?php include 'page.css'; ?>
<?php include 'header.html'; ?>
</style>


</div>

