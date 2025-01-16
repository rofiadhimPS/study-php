<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\{Animal,CatShelter,DogShelter,AnimalFood, Food};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Lucy");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food);
