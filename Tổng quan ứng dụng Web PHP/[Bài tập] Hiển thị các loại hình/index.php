<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị các loại hình</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="content">
        <h1>Hiển thị các loại hình</h1>
        <form method="POST">
            <div id="data">
                <label>Choose :</label>
                <select name="select">
                    <option value="rectangle">Rectangle</option>
                    <option value="topleft">Square triangle (top-left)</option>
                    <option value="topright">Square triangle (top-right)</option>
                    <option value="botleft">Square triangle (bottom-left)</option>
                    <option value="botright">Square triangle (bottom-right)</option>
                    <option value="isoceles">Isosceles triangle</option>
                </select>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="submit" /><br />
            </div>
            <div>
                Display :
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $select = $_POST["select"];

        function drawRectangle()
        {
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 8; $j++) {
                    echo "o ";
                }
                echo " " . "</br>";
            }
        }
        function drawTopleft()
        {
            for ($i = 5; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "o ";
                }
                echo " " . "</br>";
            }
        }
        function drawTopright()
        {
            for ($i = 0; $i < 9; $i++) {
                for ($j = 0; $j < 9; $j++) {
                    if ($j > $i) {
                        echo "o";
                    } else {
                        echo '&nbsp;&nbsp;';
                    }
                }
                echo '<br>';
            }
        }
        function drawBotleft()
        {
            for ($i = 0; $i <= 5; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "o ";
                }
                echo " " . "</br>";
            }
        }
        function drawBotright()
        {
            for ($i = 0; $i < 9; $i++) {
                for ($j = 0; $j < 9; $j++) {
                    if ($j > 9 - $i) {
                        echo "o";
                    } else {
                        echo '&nbsp;&nbsp;';
                    }
                }
                echo '<br>';
            }
        }
        function drawIsoceles()
        {
            for ($i = 1; $i < 9; $i++) {
                for ($j = 1; $j < 9 * 2; $j++) {
                    if ($j > (9 - 1 - $i) &&  $j < (9 - 1 + $i)) {
                        echo "o";
                    } else {
                        echo '&nbsp;&nbsp;';
                    }
                }
                echo '<br>';
            }
        }

        switch ($select) {
            case "rectangle":
                drawRectangle();
                break;
            case "topleft":
                drawTopleft();
                break;
            case "topright":
                drawTopright();
                break;
            case "botleft":
                drawBotleft();
                break;
            case "botright":
                drawBotright();
                break;
            case "isoceles":
                drawIsoceles();
                break;
        }
    }
    ?>
</body>

</html>