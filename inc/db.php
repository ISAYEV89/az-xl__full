<?php

$host = 'localhost';
$dbname = 'az-xl';
$user = 'root';
$pass = '';



try {
    $db = new PDO("mysql:$host=localhost;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}



?>