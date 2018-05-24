<?php

echo isset($_GET['id'])?$_GET['id']:0;

/**
* echo $_GET['id'] ? $_GET['id']:0;
* gives output 0 if value is not set and also undefined php error. 
* To overcome this 
*/


// null coalesce operator

/**
* If value is exist display value otherwise display null
* first Operand??second Operand
*/ 
echo $_GET['id']??0;

// Another Advantage

$firstname=null;
$second =null;

echo $firstname??$second??"arshad";
// outp: arshad