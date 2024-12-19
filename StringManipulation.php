<?php 

$name = "Muh Rofiadhim Rajab";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//datatype conversion

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// accessing char

$name = "Adhim";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// variable parsing

echo "Hello $name, Happy Learning PHP" . PHP_EOL;

