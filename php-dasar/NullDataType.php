<?php

$name ="Adhim";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// is_null function to check the variable is null or not

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// unset function to delete variable
$example = "adhim";
unset($example);

$example = "muhammad";
$example = null;
// isset function to check the variable is exist or not, and null value
var_dump(isset($example));