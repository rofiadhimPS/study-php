<?php

$name = "Adhim";

$otherName = &$name; // Assign by Reference
$otherName = "Rofiadhim";

echo $name . PHP_EOL;

function increment(int &$value) // Pass by Reference
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


function &getValue() // returning reference
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;