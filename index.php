<?php
//    Подключение Файла
    require_once 'db.php';
//    Запрос в таблицу
    $sql = "SELECT * FROM `mobiles`";
//    Реализация запроса в таблицу
    $result = $conn->query($sql);

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
    <title>Зарплата</title>
</head>
<body class="p-3 mb-2 bg-dark">=
    <h1 class="text-white">Зарплата еБать</h1>

<div>
    <a href="createForm.php" class="btn btn-primary"> Добавить смартфон</a>
</div>

<br>

<div>
    <table class="table bg-warning p-2">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название смартфона</th>
            <th scope="col">Количество</th>
            <th scope="col">Оплата за штуку(План не выполнен)</th>
            <th scope="col">Оплата за штуку(План выполнен)</th>
            <th scope="col">Редактирование</th>
            <th scope="col">Удаление</th>
        </tr>
        </thead>
        <tbody>
        <?php
//        Вывод на экран всех строчек из таблицы с помощью цикла
        while($row = $result->fetch()){
            echo "<tr>";
            echo "<th scope=\"row\">". $id = $row["id"]."</th>";
            echo "<td>". $name = $row["name"]. "</td>";
            echo "<td><form action='quantityUpdate.php' method='post'>
                        <input type='hidden' name='id' value='". $row['id'] . "'/>
                        <input class='btn btn-danger' name='minus' type='submit' value='-'> " .
                        $quantity = /*(integer)*/$row["quantity"] .
                      " <input class='btn btn-success' name='plus' type='submit' value='+'></form>";

            echo "<td>". $lowPrice = $row["low_price"]. "</td>";
            echo "<td>". $highPrice = $row["high_price"]. "</td>";
            echo "<td><form action='updateForm.php' method='post'>
                        <input type='hidden' name='id' value='". $row['id'] . "'/>
                        <input class='btn btn-success' name='update' type='submit' value='Update'>
                      </form>
                  </td>";
            echo "<td>
                      <form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='". $row['id'] . "'/>
                        <input class='btn btn-danger' name='delete' type='submit' value='Delete'>
                      </form>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<div>
    <table class="table bg-warning p-2">
        <thead>
        <tr>
            <th scope="col">Месяц</th>
            <th scope="col">Количество проданных товаров</th>
            <th scope="col">Сумма(План не выполнен)</th>
            <th scope="col">Сумма(План выполнен)</th>
            <th scope="col">Оплата за штуку(План выполнен)</th>
            <th scope="col">Редактирование</th>
            <th scope="col">Удаление</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
    <form action='count.php' method='post'>
        <input class='btn btn-success' name='fine' type='submit' value='Не выполнен'>
    </form>
    <br>
    <form action='count.php' method='post'>
        <input class='btn btn-success' name='wonderful' type='submit' value='Выполнен'>
    </form>
</div>

</body>
</html>
