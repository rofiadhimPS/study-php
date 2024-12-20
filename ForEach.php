<?php

$names = ["Muh", "Rofiadhim", "Rajab"];

for ($i = 0; $i < count($names); $i++){
    echo "Data $i = $names[$i]" . PHP_EOL;
}

// foreach

foreach($names as $index => $name) {
    echo "Data $index = $name" . PHP_EOL;
}

foreach($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// foreach with key

$person = [
    "firstName" => "Muh",
    "middleName" => "Rofiadhim",
    "lastName" => "Rajab",
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}