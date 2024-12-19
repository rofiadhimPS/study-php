<?php

$gender = "MAN";
$hi = null;

if($gender == "MAN") {
    $hi = "Hi bro!";
} else {
    $hi = "Hi nona!";
}

echo $hi . PHP_EOL;

// Ternary Operator

$hi = $gender == "WOMAN" ? "Hi bro!" : "Hi nona!";

echo $hi . PHP_EOL;