<?php

require_once "data/Animal.php";

use Data\{Anima, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();