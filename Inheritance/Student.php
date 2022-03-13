<?php

class Student extends Person {

    public function __construct($name, $class) {
        parent::__construct($name);
        $this->class = $class;
    }

    private function study() {
        echo $this->name . " is studying.<br>";
    }
}