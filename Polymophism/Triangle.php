<?php

class Triangle implements Figure {
    protected $base;
    protected $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function CalculateSurface() {
        return $this->base * $this->height / 2;
    }
}