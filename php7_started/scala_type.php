<?php
// strict mode
declare(strict_types=1);
// sending parameter in function
function sendMoney(int $a){
	var_dump($a);
}

sendMoney('100');
sendMoney(true);