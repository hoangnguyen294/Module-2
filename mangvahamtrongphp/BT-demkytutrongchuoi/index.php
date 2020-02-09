<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Đếm số lần xuất hiện của ký tự trong chuỗi
    </title>
</head>

<body>
    <div id="content">
        <h1>COUNT</h1>
        <form action="" method="POST">
            <div id="data">
                <label for="">Nhập chuỗi</label>
                <input type="text" name="str"><br>
                <label for="">Nhập ký tự muốn đếm</label>
                <input type="text" name="char"><br>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name='submit' value="Submit" /></br>
            </div>
        </form>
        <div><h3>Result:</h3>
            <?php
            if (isset($_POST['submit'])) {
                $str = $_POST['str'];
                $char = $_POST['char'];
                $count = 0;
                $strlenght = strlen($str);
                for ($i = 0; $i < $strlenght; $i++) {
                    if ($char == $str[$i]) {
                        $count++;
                    }
                }
                echo "String : " . $str . "<br>";
                echo "Char : " . $char . "<br>";
                echo "Count :" . $count . "<br>";
            }
            ?>
        </div>
    </div>

</body>

</html>