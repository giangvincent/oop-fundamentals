<?php

class Teacher extends Person {
    protected $class;

    public function __construct($name, $class) {
        parent::__construct($name);
        $this->class = $class;
    }

    protected function teach() {
        echo $this->name . " is teaching.<br>";
    }
}