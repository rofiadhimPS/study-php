<?php

require_once "data/Person.php";

$adhim = new Person("Adhim", "Makassar");
$adhim->name = "Adhim";

$adhim->sayHello("Muh");

$rajab = new Person("Rajab", "Bulukumba");
$rajab->name = "Rajab";

$rajab->sayHello(null);

$adhim->info();
$rajab->info();

