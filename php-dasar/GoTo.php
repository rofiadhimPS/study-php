<?php

goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;

while($counter <=10){
    echo "While Loop " . $counter . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
    }
}

end:
echo "End Loop";