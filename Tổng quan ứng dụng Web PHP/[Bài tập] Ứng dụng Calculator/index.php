<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Future Value Calculator</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="content">
        <h1>Simple Calculator</h1>

        <form method="POST">
            <div id="data">
                <label>First operand:</label>
                <input type="number" name="first" value="0" />
                <label>Operator:</label>
                <select name="select">
                    <option value="add">Addition (+)</option>
                    <option value="sub">Subtraction (-)</option>
                    <option value="mul">Multiplication (*)</option>
                    <option value="div">Division (/)</option>
                </select>
                <label>Second operand:</label>
                <input type="number" name="second" value="0" />

            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /></br>
            </div>
            </hr>
            <div>Result :
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $first = $_POST["first"];
                    $second = $_POST["second"];
                    $select = $_POST["select"];
                    switch ($select) {
                        case "add":
                            echo $first + $second;
                            break;
                        case "sub":
                            echo $first - $second;
                            break;
                        case "mul":
                            echo $first * $second;
                            break;
                        case "div":
                            if ($second === 0) {
                                echo "Not Division by Zero";
                            } 
                            else {
                                echo $first / $second;
                            }
                    }
                }
                ?>
            </div>
        </form>
    </div>


</body>

</html>