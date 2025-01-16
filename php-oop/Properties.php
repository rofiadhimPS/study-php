<?php

require_once "data/Person.php";

$person = new Person("Adhim","Makassar");
$person->name = "Adhim";
$person->address = "Makassar";
$person->country = "Indonesia";

var_dump($person);

echo "Name: $person->name" . PHP_EOL;
echo "Address: $person->address" . PHP_EOL;
echo "Country: $person->country" . PHP_EOL;

// error
// $person->name = []; this must be string 