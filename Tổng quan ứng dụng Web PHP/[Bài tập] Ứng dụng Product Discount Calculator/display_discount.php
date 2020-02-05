<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $description = $_POST["description"];
        $price = $_POST["price"];
        $discount_percent = $_POST["discount_percent"];
    }
    ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <label>Product Description: </label>
        <span>
            <?php 
                echo $description;
            ?>
        </span><br />
        <label>Price: </label>
        <span>
            <?php 
                echo $price;
            ?>
        </span><br />
        <label>Discount Percent: </label>
        <span>
            <?php 
                echo $discount_percent . "%";
            ?>
        </span><br />
        <label>Discount Amount: </label>
        <span>
            <?php 
                echo $discount_amount = $price * $discount_percent * 0.1;
            ?>
        </span><br />
        <label>Discount Price: </label>
        <span>
            <?php 
                echo $discount_price = $price - $discount_amount;
            ?>
        </span><br />
    </div>
</body>

</html>
