<?php

echo 'Name ';
echo 'Muh Rofiadhim Rajab';
echo "\n";

echo "Name : ";
echo "Muh\t Rofiadhim\t Rajab";

// heredoc can parsing variable
echo <<<ADHIM
    \n
    This is multiline teks 
    for example, now we study string data type
    can using heredoc
    \n
ADHIM;

// nowdoc
echo <<<'ADHIM'
    This is multiline teks 
    for example, now we study string data type
    can using nowdoc, can't parsing variable
ADHIM;

