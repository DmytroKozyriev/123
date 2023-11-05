
<?php
//  $host = 'localhost';  // Хост, у нас все локально
 // $user = 'kamenshc_form1';    // Имя созданного вами пользователя
 // $pass = 'Kozak33708'; // Установленный вами пароль пользователю
 // $db_name = 'kamenshc_form';   // Имя базы данных
 //  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой


require 'database.php';
$query = $pdo->prepare("SELECT * FROM form1 ORDER BY id DESC ");
$query->execute();
$articles = $query->fetchAll();

?>



<h4>Вакансии:</h4>

<?php foreach ($articles as $article) { ?>

  <ul>
    
  <li><a href="page.php?id=<?php echo $article['id']; ?>"><?php echo $article['nick']?></a> <span class="font-italic text-muted" posted on <?php echo $article['id']?></span></li>
</ul>

<?php } ?>

</div>


