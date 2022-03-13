<?php

class Circle implements Figure {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function CalculateSurface() {
        return $this->radius * $this->radius * pi();
    }
}