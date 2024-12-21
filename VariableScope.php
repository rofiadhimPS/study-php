<?php

$name = "Adhim"; // global scope

function sayHello()
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"];
}

sayHello();
// var_dump($GLOBALS); // accessing super global keyword

