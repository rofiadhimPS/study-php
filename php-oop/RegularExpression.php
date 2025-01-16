<?php

$matches = [];
$result = (bool) preg_match_all("/adhim|muh|rofi/i", "Muh Rofiadhim Rajab", $matches);

var_dump($result);
var_dump($matches);


$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing lu bangsat");

var_dump($result);

$result = preg_split("/[\s,-]/", "muh rofiadhim-rajab,expert coding");
var_dump($result);