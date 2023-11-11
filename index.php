<!doctype html>
<html lang="ru">


<title>Работа в Польше</title>
<meta name="description" content="Работа в Польше, Вакансии в Польше, вы можете размещать свои объявления, абсолютно бесплатно.">

<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="headerblock.css" />
</head>
<body>


  <div class="container">

    <header> 
      <h1 class="name1"><a href="https://kamenshchik.pl/">Работа в Европе</a></h1>

      <div id="con1">

   
      <form name="search" method="post" action="search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>


</div>







<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
    <title>Главная страница</title>
    </head>
    <body>



<div id="con2">
  <a href="/formvakansii.html" title="Ссылка HTML" style="color: #ffffff; text-decoration: none">Добавить вакансию</a>
 </div>

 




</div>

<div class="container2">

  
   </div>
  
   </div>


    </div>
    </header>
    
    <body>
    
   
    <?php
        include 'insertdata.php';
    ?>




</body>
</html>






