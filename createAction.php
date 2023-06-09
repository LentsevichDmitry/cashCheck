<?php
require_once "db.php";

$data = [
    'name' => $_POST['name'],
    'lowPrice' => $_POST['low_price'],
    'highPrice' => $_POST['high_price']
    ];
$sql = "INSERT INTO mobiles(name, low_price, high_price) VALUES (:name,:lowPrice,:highPrice)";
$stmt = $conn->prepare($sql);
$stmt->execute($data);
if ($stmt == true){
    header("Location: /index.php");
    exit();
}else{
    echo "Oshibka";
}
;
