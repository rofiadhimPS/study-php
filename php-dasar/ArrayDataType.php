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

// Array as a Map

$adhim = array (
    "id" => "adhim",
    "name" => "Rofiadhim Rajab",
    "age" => 22,
    "address" => [
        "city" => "Makassar",
        "country" => "Indoensia",
    ],
);
var_dump($adhim);

var_dump($adhim["name"]);
var_dump($adhim["age"]);
var_dump($adhim["address"]["country"]);

$rajab = [
    "id" => "rajab",
    "name" => "Abdul Rajab",
    "age" => 50,
    "address" => array (
        "city" => "Makassar",
        "country" => "Indoensia",
    ),
];
var_dump($rajab);

var_dump($rajab["address"]["city"]);



