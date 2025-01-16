<?php

function sayHello(string $first, string $middle="", string $last=""): void // parameter yang tidak memiliki default value (wajib) berada di depan, dan parameter yang memiliki default value berada di belakang
{
    echo "Hello  $first $middle $last" . PHP_EOL;
}

// php before version 8 without named argument
sayHello("Muh", "Rofiadhim", "Rajab");
// sayHello("Muh", "Rajab"); ERROR

// named argument php8
sayHello(last:"Rajab", first:"Muh", middle:"Rofiadhim");
sayHello(first: "Muh", last: "Rajab");

