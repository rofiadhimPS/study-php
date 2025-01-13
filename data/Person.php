<?php

class Person
{
    var string $name;
    var ?string $address = null; // nullable
    var string $country = "Indonesia"; // set default value

    function sayHello(string $name){
        echo "Hello $name" . PHP_EOL;
    }
}