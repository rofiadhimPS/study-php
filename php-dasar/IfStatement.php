<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80){
    echo "Your Grade A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Your Grade B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Your Grade C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Your Grade D" . PHP_EOL;
} else {
    echo "Your Grade E" . PHP_EOL;
}

// Alternative Syntax

if ($nilai >= 80 && $absen >= 80):
    echo "Your Grade A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70): 
    echo "Your Grade B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60): 
    echo "Your Grade C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50): 
    echo "Your Grade D" . PHP_EOL;
else :
    echo "Your Grade E" . PHP_EOL;
endif;