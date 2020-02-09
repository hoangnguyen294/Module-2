<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm phần tử lớn nhất trong mảng hai chiều</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php require "matrix.function.php" ?>

<body>
    <div id="content">
        <h1>MATRIX</h1>
        <form action="" method="POST">
            <div id="data">
                <label for="">Nhập số dòng</label>
                <input type="number" name="rows"><br>
                <label for="">Nhập số cột</label>
                <input type="number" name="cols"><br>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name='submit' value="Submit" /></br>
            </div>
        </form>
        <div class="div1">
            <h3>Show Matrix :<?php 
                              echo $show ?? null;
                              echo $result ?? null;
                              ?> </h3>

        </div>
    </div>
</body>

</html>