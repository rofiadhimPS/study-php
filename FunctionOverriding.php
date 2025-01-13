<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adhim";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Rajab";
$vp->sayHello("Abdul");