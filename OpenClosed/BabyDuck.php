<?php

/**
 * BabyDuck class extends Duck class
 * - It has to overwrite fly function
 */
class BabyDuck extends Duck {
    public function fly() {
        echo 'This duck can not fly';
    }
}