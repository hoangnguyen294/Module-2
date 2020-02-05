<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
    <div id="content">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $investment = $_POST["investment"];
        $rate = $_POST["rate"];
        $years = $_POST["years"];
    }
    ?>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount: </label>
        <span>
            <?php 
                echo $investment;
            ?>
        </span> <br/>

        <label>Yearly Interest Rate: </label>
        <span>
            <?php 
                echo $rate;
            ?>
        </span> <br/>

        <label>Number of Years: </label>
        <span>
            <?php 
                echo $years;
            ?>
        </span> <br/>


        <label>Future Value: </label>
        <span>
        <?php 
                echo $future = $investment + ($investment * $rate);
            ?>
        </span> <br/>
    </div>
</body>
</html>