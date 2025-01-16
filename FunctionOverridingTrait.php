<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass 
{
    use SampleTrait;
    public function sampleFunction(string $name): string // parameter harus sama begitu pula return typenya
    {
        return "VALID";
    }
}

