<?php 
class Point3D extends Point2D
{
    public $z;
    function __construct($x = 0.0, $y = 0.0, $z = 0.0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    function getZ()
    {
        return $this->z;
    }
    function setZ($z)
    {
        $this->z = $z;
    }
    function getXYZ()
    {
        return array($this->x, $this->y, $this->z);
    }
    function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}
?>