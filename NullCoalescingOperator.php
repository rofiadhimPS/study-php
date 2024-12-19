<?php

$data = [
    "action" => "Create",
    // "action" => null,
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// Null Coalescing Operator
$data = [];
$action = $data['action'] ?? "Nothing";
echo $action . PHP_EOL;
