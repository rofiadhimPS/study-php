<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Smartphone");
$category->setExpensive(true);

$category->setName("    ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->getExpensive()}" . PHP_EOL;
