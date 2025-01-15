<?php

require_once "exception/ValidationExecpion.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "Adhim";
$loginRequest->password = "Adhim";

try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace()); // debug exception

    echo $exception->getTraceAsString();
} finally {
    echo "This must be execute" . PHP_EOL;
}
