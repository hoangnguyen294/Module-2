<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = $_POST["to"];
        $from = $_POST["from"];
        $amount = $_POST["amount"];
        if($to === "VND" && $from === "USD"){
            echo $amount/23000;
        }
        if($to === "USD" && $from === "VND"){
            echo $amount * 23000;
        }
        if($to === "VND" && $from === "VND"){
            echo "Duplicate, please choose different !";
        }
        if($to === "USD" && $from === "USD"){
            echo "Duplicate, please choose different !";
        }
    }
?>