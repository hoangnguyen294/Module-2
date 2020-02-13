<?php
    require "circle.php";
    require "cylinder.php";
    $circle = new Circle(3,'red');
    $cylinder = new Cylinder(3,'blue',2);

    echo $circle->radius.' '.$circle->color.' '.$circle->area;
    echo "<br/>";
    echo $cylinder->calculateArea().'  '.$cylinder->calculateVolume();
