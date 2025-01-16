<?php

function sayHello(?string $name){
    if($name == null){
        throw new Exception("Tidak boleh null");
    }

    echo "Helo $name" . PHP_EOL;
}

function sayHelloexpression(?string $name){
    
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloexpression("Adhim");
