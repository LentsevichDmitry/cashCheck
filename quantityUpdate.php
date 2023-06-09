<?php
require_once "db.php";
$id = $_POST['id'];
$sqlSelect = "SELECT * FROM mobiles WHERE id = $id";
$result = $conn->query($sqlSelect);

foreach ($result as $item){
    $quantity = $item['quantity'];
    $quantity = (integer)$quantity;
}

if ($_POST['minus']){
    --$quantity;
    $updateResult = $conn->query("UPDATE mobiles SET quantity = $quantity WHERE id = $id");
    header("Location: /index.php");
    exit();
}elseif($_POST['plus']){
    ++$quantity;
    $updateResult = $conn->query("UPDATE mobiles SET quantity = $quantity WHERE id = $id");
    header("Location: /index.php");
    exit();
}
