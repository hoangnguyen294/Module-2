<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng chuyển đổi tiền tệ</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="content">
        <h1>Currency Converter </h1>

        <form method="POST">
            <div id="data">
                <label>Amount:</label>
                <input type="number" name="amount" value="0" /><br />
                <label>From Currency:</label>
                <select name="to">
                    <option>VND</option>
                    <option>USD</option>
                </select>
                </br>
                <label>To Currency:</label>
                <select name="from">
                    <option>VND</option>
                    <option>USD</option>
                </select>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Submit" /><br />
            </div>
            <div>Result : <?php require "index.result.php" ?> </div>
        </form>
    </div>
   

</body>

</html>