<?php

/**
 * Description of Duck class
 * - Duck class is a single responsibility class
 * - Duck class have only one responsibility that is describing the behavior of a duck
 */
class Duck {
	function eat() {
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