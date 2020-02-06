<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {        
        if ($min > $arr[$i]) {
            $min  = $arr[$i];
            $index = $i;
        }
    }
    return "Giá trị nhỏ nhất là " . $min . ". Ở vị trí index " . $index;
}
$number = [23, 55, 1, 84, 0, 5, 100];
echo findMin($number);
