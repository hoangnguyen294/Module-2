<?php 
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $arrNum = [2, 53, 72, 87, 2323, 545, 6, 777, 343];
        $numDel = $_POST['numdel'];
        $arrNew = [];
        for ($i=0; $i < count($arrNum); $i++) { 
            if($arrNum[$i] != $numDel){
                array_push($arrNew, $arrNum[$i]);
            }
        }
        
        print_r($arrNew);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa phần tử khỏi mảng</title>
</head>
<body>
    <form method="POST">
        <label for="">Nhập phần tử muốn xóa</label>
        <input type="number" name="numdel">
        <input type="submit" name="del">
    </form>
</body>
</html>