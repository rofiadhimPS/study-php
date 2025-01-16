<?php

class Person
{
    const AUTHOR = "Muh Rofiadhim Rajab";
    
    var string $name;
    var ?string $address = null; // nullable
    var string $country = "Indonesia"; // set default value

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, my name $this->name" . PHP_EOL;
        }
    }

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL; // self keyword to call the constant in same class
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
    
}