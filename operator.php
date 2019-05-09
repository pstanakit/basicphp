<?php

$name   = "Baba";
$age    = 10;
$weight = 30;

$normol_price = "29";
$sale_price   = 29.0;

echo "<pre>";

var_dump($name, $age, $weight);

var_dump($normol_price == $sale_price);
var_dump($normol_price === $sale_price);
var_dump($normol_price != $sale_price);
var_dump($normol_price <=> $sale_price);

echo "</pre>";
