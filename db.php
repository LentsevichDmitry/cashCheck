<?php
//Подключение бд и проверка подключения
try {
    $conn = new PDO('mysql:host=localhost;dbname=mobile_base', 'root', '');
}catch (PDOException $e) {
    die('Подключение не удалось: '. $e->getMessage());
}
