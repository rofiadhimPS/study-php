<?php

function testMixed(mixed $data): mixed
{
    if(is_array($data)) {
        return [];
    } else if (is_string($data)){
        return "String";
    } else if(is_int($data)){
        return 10;
    } else {
        return null;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("string"));
var_dump(testMixed(1));
var_dump(testMixed(new stdClass()));
