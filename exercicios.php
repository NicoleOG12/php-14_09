<?php

/*function circleArea(int $a){
    return pi() * $a ** 2;
}
echo circleArea (6);
//____________________________________________________________________________

$areaRectangularTriangle = fn (int $a, int $b) => $a * $b / 2;
echo $areaRectangularTriangle (45, 30);*/
//____________________________________________________________________________

$area = fn (int $a, int $b, int $c) => $b ** 2 - 4 * $a * $c;

echo $area (10, 10, 10);

