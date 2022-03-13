<?php

class Rectangle implements Figure {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function CalculateSurface() {
        return $this->width * $this->height;
    }
}