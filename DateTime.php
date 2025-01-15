<?php

$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone("Asia/Makassar"));
$dateTime->setDate(2002, 6, 3);
$dateTime->setTime(10,10,10);

$dateTime->add(new DateInterval("P1Y"));
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$dateNow = new DateTime();
$dateNow->setTimezone(new DateTimeZone("Asia/Makassar"));
var_dump($dateNow);

$string = $dateNow->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2025-1-15 10:10:10", new DateTimeZone("Asia/Makassar"));
var_dump($date);