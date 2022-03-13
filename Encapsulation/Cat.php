<?php

class Cat
{
    private $mood;
    private $energy;
    private $hunger;

    private function meow() {
        echo "Meow!";
    }

    public function sleep() {
        $this->mood = "sleepy";
        $this->energy = "low";
        $this->hunger = "full";
    }

    public function play() {
        $this->mood = "happy";
        $this->energy = "high";
        $this->hunger = "full";

        $this->meow();
    }

    public function feed() {
        $this->mood = "happy";
        $this->energy = "high";
        $this->hunger = "empty";

        $this->meow();
    }
}
