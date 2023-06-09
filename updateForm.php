<?php
require_once "db.php";
$id = $_POST['id'];

$sqlSelect = "SELECT * FROM mobiles WHERE id = $id";
$result = $conn->query($sqlSelect);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous">
    <title>Добавление смартфона</title>
</head>
<body>
<?php
    foreach ($result as $item){
?>
<form action="updateAction.php" method="post">
    <div class="mb-3">
        <label for="input1" class="form-label">ID</label>
        <input type="text" name="id" class="form-control" id="input1" aria-describedby="emailHelp"
               value="<?= $id = $item['id'] ?>">
    </div>
    <div class="mb-3">
        <label for="input2" class="form-label">Smartphone name</label>
        <input type="text" name="name" class="form-control" id="input2" aria-describedby="emailHelp"
               value="<?= $name = $item['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="input3" class="form-label">Quantity</label>
        <input type="text" name="quantity" class="form-control" id="input3" aria-describedby="emailHelp"
               value="<?= $quantity = $item['quantity'] ?>">
    </div>
    <div class="mb-3">
        <label for="input4" class="form-label">Low price</label>
        <input type="text" name="low_price" class="form-control" id="input4" aria-describedby="emailHelp"
               value="<?= $lowPrice = $item['low_price'] ?>">
    </div>
    <div class="mb-3">
        <label for="input5" class="form-label">High price</label>
        <input type="text" name="high_price" class="form-control" id="input5" aria-describedby="emailHelp"
               value="<?= $highPrice = $item['high_price'] ?>">
        <?php
        }
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
