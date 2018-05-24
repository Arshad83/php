<?php

declare(strict_types=1);
// function():return type
function sum(float $val1,float $val2):float{
return $val1+$val2;
}

$result=sum(2.5,5);

var_dump($result);