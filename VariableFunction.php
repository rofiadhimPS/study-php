<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName(); // variable function

$functionName = "bar";
$functionName(); // variable function

// using variable function as argument function

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string 
{
    return "Sample $name";
}
sayHello("Adhim", "sampleFunction");
sayHello("Adhim","strToUpper");
sayHello("Adhim","strToLower");
