<?php

$nilai = "A";

switch ($nilai) {
    case "A": 
        echo "You passed with very good" . PHP_EOL;
        break;
    case "B": 
    case "C":
        echo "You passed" . PHP_EOL;
        break;
    case "D":
        echo "You didn't passed" . PHP_EOL;
        break;
    default:
        echo "Maybe your wrong subject" . PHP_EOL;    
}

// Alternative Syntax

switch ($nilai) :
    case "A": 
        echo "You passed with very good" . PHP_EOL;
        break;
    case "B": 
    case "C":
        echo "You passed" . PHP_EOL;
        break;
    case "D":
        echo "You didn't passed" . PHP_EOL;
        break;
    default:
        echo "Maybe your wrong subject" . PHP_EOL;    
endswitch;