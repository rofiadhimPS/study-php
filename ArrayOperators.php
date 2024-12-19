<?php

$first = [
    "first_name" => "Rofiadhim",
];

$last = [
    // "first_name" => "Muh", 
    "last_name" => "Rajab",
];

//Union Operation
$full = $first + $last; //didahulukan $first
var_dump($full);

//Comparison Operator
$a = [
    "first_name" => "Rofiadhim", 
    "last_name" => "Rajab",
];

$b = [
    "last_name" => "Rajab",
    "first_name" => "Rofiadhim", 
];

var_dump($a == $b); 
var_dump($a === $b); 
