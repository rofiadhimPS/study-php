<?php

function increment()
{
    static $counter = 1; // using static keyword
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
