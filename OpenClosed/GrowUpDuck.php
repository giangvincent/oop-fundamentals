<?php

/**
 * GrowUpDuck class extends Duck class
 * - It has some new functions
 */
class GrowUpDuck extends Duck {
    public function layEggs() {
        echo 'This duck can lay eggs';
    }

    public function mate() {
        echo 'Duck is mating';
    }
}