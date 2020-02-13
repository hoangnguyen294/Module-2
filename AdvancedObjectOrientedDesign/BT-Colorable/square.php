<?php

include_once ('rectangle.php');
include_once ('Colorable.interface.php');
class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    function howToColor() {
        echo "Color all four sides.";
    }
}