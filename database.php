<?php 
$server = 'localhost';
$user = 'kamenshc_form1';
$pass = 'Kozak33708';
$db = 'kamenshc_form';

try {

    $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {

    echo "Connection failed: ", $e->getMessage();
}
?>