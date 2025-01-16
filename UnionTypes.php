<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Adhim";
$example->data = 100;
$example->data = true;
$example->data = ["Adhim"];

function sampleFunction(string|array $data): string|array
{
    if(is_array($data)){
        return ["Array"];
    } else if (is_string($data)){
        return "String";
    }
}

echo sampleFunction("Adhim") , PHP_EOL;
var_dump(sampleFunction(["Dhin", 121, 12]));