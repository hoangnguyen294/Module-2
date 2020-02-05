<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Future Value Calculator</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="content">
        <h1>Future Value Calculator</h1>
        
        <form action="display_result.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="number" name="investment" value="0"/><br/>

                <label>Yearly Interest Rate:</label>
                <input type="number" name="rate" value="0"/><br/>

                <label>Number of Years:</label>
                <input type="number" name="years" value="0"/>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br/>
            </div>
        </form>
    </div>
    
</body>
</html>