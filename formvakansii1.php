
    
    

<?php

// Получение данных из формы
$nick = $_POST['nick'];
$name = $_POST['name'];
$textarea = $_POST['textarea'];

// Подключение к базе данных
$servername = "localhost";
$username = "kamenshc_form1";
$password = "Kozak33708";
$dbname = "kamenshc_form";
 
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($connection, 'utf8mb4');
 
// Проверка соединения с базой данных
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}
 
// Сохранение данных в базе данных
$sql = "INSERT INTO form1 VALUES ('$nick', '$name', '$textarea', '$id')";
 
if ($conn->query($sql) === TRUE) {
  echo "Данные успешно сохранены";
} else {
  echo "Ошибка: " . $sql . "<br>" . $conn->error;
}
 
// Закрытие соединения
$conn->close();
?> 