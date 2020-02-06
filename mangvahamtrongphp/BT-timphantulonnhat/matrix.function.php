<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];
        $matrix= GenerateMatrix($rows, $cols);
        $show= ShowMatrix($rows, $cols, $matrix);
        $find= findMax($rows, $cols, $matrix);
        print $show;
        echo "Max value is :" . $find;
    }
    function GenerateMatrix($row, $col){
        $matrix = array($row);
        for ($i=0; $i < $row ; $i++) { 
            $arr = array($col);
            for ($j=0; $j < $col ; $j++) { 
                $arr[$j] = rand(0,100); 
            }
            $matrix[$i] = $arr;
        }
        return $matrix;
    } 
    function ShowMatrix($row, $col, $matrix){
        $str ="<table>";
        for($i=0; $i< $row; $i++){
            $str = $str . "<tr>";
            for($j = 0; $j< $col; $j++){
                $str = $str . "<td>" . $matrix[$i][$j] ."  ". "</td>";
            }
            $str = $str . "</tr>"."</br>"."</table>";
        }
        return $str;
    }
    function findMax($row, $col, $matrix){
        $max = $matrix[0][0];
        for ($i=1; $i < $row ; $i++) { 
            for ($j=1; $j < $col ; $j++) { 
                if ($max < $matrix[$i][$j]) {
                    $max = $matrix[$i][$j];
                }
            }
        }
        return $max;
    }
   
?>