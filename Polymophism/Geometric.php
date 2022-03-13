<?php

class Geometric {
    public function CalculateParamter(Figure $figure) {
        return $figure->CalculateSurface();
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);

$geometric = new Geometric();
echo $geometric->CalculateSurface($circle);
echo $geometric->CalculateSurface($rectangle);
echo $geometric->CalculateSurface($triangle);