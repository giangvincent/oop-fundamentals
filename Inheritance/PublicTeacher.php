<?php

class PublicTeacher extends Teacher {
    public function __construct($name, $class) {
        parent::__construct($name);
        $this->class = 'public';
    }
}