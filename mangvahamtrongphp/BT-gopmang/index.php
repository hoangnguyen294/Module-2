<?php 
    $arr1 = [1, 8, 3, 4, 75];
    $arr2 = ['a', 'b', 'c', 'd', 'e', 'f'];
    $arr3 = array();
    for ($i=0; $i < count($arr1) ; $i++) { 
        array_push($arr3, $arr1[$i]);
    }
    for ($i=0; $i < count($arr2) ; $i++) { 
        array_push($arr3, $arr2[$i]);
    }

    foreach ($arr3 as $value) {
        echo $value;
    }
?>
