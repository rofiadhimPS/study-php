<?php

for ($counter = 1; $counter <= 10; $counter++){
    echo "for loop " . $counter . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--){
    echo "for loop " . $counter . PHP_EOL;
}

// Alternative Syntax

for ($counter = 5; $counter >= 1; $counter--):
    echo "for loop " . $counter . PHP_EOL;
endfor;
