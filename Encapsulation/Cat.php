<?php

class Cat
{
    /**
     * Properties is set to private to prevent direct access
     */
    private $mood;
    private $energy;
    private $hunger;

    /**
     * Can not see when function was called
     */
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
