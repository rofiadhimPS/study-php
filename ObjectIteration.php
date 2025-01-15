<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $four = "Forth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "four" => $this->four,
        ];

        $iterator = new ArrayIterator($array);

        return $iterator;
    }
}

$data = new Data();
// var_dump($data);
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
