<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Adhim";
$student1->value = 100;

$string = (string) $student1;
echo $string . PHP_EOL;

// can do with this

echo $student1 . PHP_EOL;
