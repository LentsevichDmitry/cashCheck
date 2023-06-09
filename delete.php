<?php
require_once "db.php";

$id = $_POST['id'];

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlDelete = "DELETE FROM mobiles WHERE id = $id";
    $stmt = $conn->prepare($sqlDelete);
    $stmt->execute();

    header("Location: /index.php");

}catch (PDOException $e){
    echo $sqlDelete . "<br>" . $e->getMessage();
}
