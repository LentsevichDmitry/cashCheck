<?php
require_once 'db.php';

$sql = "SELECT * FROM mobiles";
$stmt = $conn->query($sql);

if($_POST['fine']){

    $resultLowPrice = 0;

    while ($row = $stmt->fetch()){
        $quantity = $row['quantity'];
        $low_price = $row['low_price'];
        $resultLowPrice += $quantity * $low_price;
    }
    echo "FINE <br>";
    echo $resultLowPrice;

}elseif ($_POST['wonderful']){

    $resultHighPrice = 0;

    while ($row = $stmt->fetch()){
        $quantity = $row['quantity'];
        $high_price = $row['high_price'];
        $resultHighPrice += $quantity * $high_price;
    }
    echo "WONDERFUL <br>";
    echo $resultHighPrice;
}