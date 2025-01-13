<?php

require_once "data/Person.php";

$adhim = new Person();
$adhim->name = "Adhim";

$adhim->sayHello("Muh");

$rajab = new Person();
$rajab->name = "Rajab";

$rajab->sayHello(null);

$adhim->info();
$rajab->info();

