<?php

class Person
{
    const AUTHOR = "Muh Rofiadhim Rajab";
    
    var string $name;
    var ?string $address = null; // nullable
    var string $country = "Indonesia"; // set default value

    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, my name $this->name" . PHP_EOL;
        }
    }
}