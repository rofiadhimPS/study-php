<?php

for($ccounter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 1){
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}