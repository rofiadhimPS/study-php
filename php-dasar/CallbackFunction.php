<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Adhim", "strtoupper");
sayHello("Adhim", "strtolower");
sayHello("Adhim", function (string $name): string {
    return strtoupper($name);
}); // anonymous function
sayHello("Adhim", fn($name) => strtoupper($name)); // arrow function
