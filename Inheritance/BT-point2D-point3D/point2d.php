<?php 
class Point2D
{
    public $x;
    public $y;
    function __construct($x = 0.0, $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function getX()
    {
        return $this->x;
    }
    function getY()
    {
        return $this->y;
    }
    function setX($x)
    {
        $this->x = $x;
    }
    function setY($y)
    {
        $this->y = $y;
    }
    function getXY()
    {
        return array($this->x, $this->y);
    }
    public function toString()
    {
        return "($this->x,$this->y)";
    }
}
?>