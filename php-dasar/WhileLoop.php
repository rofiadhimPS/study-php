<?php

$counter = 1;

while($counter <=10){
    echo "While Loop " . $counter . PHP_EOL;
    $counter++;
}

// Alternative Syntax

$counter = 1;

while($counter <=10):
    echo "While Loop " . $counter . PHP_EOL;
    $counter++;
endwhile;

