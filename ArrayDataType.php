<?php

$values = array(10,9,8,7.5);
var_dump($values);

$names = ["Muh", "Rofiadhim", "Rajab"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Andi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Bily";
var_dump($names);

var_dump(count($names));
