<?php

class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.<br>";
    }
    public function sleep() {
        echo $this->name . " is sleeping.<br>";
    }

}