<?php

function factorialLoop(int $value): int
{
    $total = 1;

    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));

function factorialRecursive(int $value): int
{
    if($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

// test stuck overflow

function loop(int $value)
{
    if ($value == 0){
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

// loop(3000000000) // dont run this
loop(300);