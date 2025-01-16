<?php

$sayHello = function (string $name) // Anonymous Function
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Adhim");

// Using Anonymous Function as Argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Adhim", function (string $name):string {
    return strtoupper($name);
});

$filterFunction = function (string $name):string {
    return strtoupper($name);
};

sayGoodBye("Adhim", $filterFunction);

// accessing variable outside closure or anonymous function
$firstName = "Rofiadhim";
$lastName = "Rajab";

$sayHelloAdhim = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAdhim();