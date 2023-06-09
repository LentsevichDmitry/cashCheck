<?php
require_once "db.php";


$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$lowPrice = $_POST['low_price'];
$highPrice = $_POST['high_price'];

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlUpdate = "UPDATE mobiles SET name = $name, quantity = $quantity, low_price = $lowPrice, high_price = $highPrice
                WHERE id = $id";
    $stmt = $conn->prepare($sqlUpdate);
    $stmt->execute();

    header("Location: /index.php");

}catch (PDOException $e){
    echo $sqlUpdate . "<br>" . $e->getMessage();
}

