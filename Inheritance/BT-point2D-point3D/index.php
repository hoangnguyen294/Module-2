<?php
require "point2d.php";
require "point3d.php";

$poin2d = new Point2D(3.5, 4.4);
$point3d = new Point3D(4.1, 6.2, 7.3);
echo $poin2d->getX();
echo $poin2d->getY();
echo $poin2d->setX(1.1);
echo $poin2d->getY(2.2);
// echo $poin3d->getZ();
// echo $poin3d->setZ(5.5);
echo $poin3d->getXYZ();
echo $poin3d->setXYZ(1.1, 1.2, 1.3);
