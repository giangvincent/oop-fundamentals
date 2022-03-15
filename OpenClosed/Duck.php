<?php

/**
 * Duck class is a base class for all duck classes
 */
class Duck implements Animal {
	function eat($anything) {
        echo 'Duck is eating.<br>';
    }
	function fly() {
        echo 'Duck is flying.<br>';
    }
	function swim() {
        echo 'Duck is swimming.<br>';
    }
	function walk() {
        echo 'Duck is walking.<br>';
    }
}
