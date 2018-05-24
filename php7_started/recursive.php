<?php

//sudo code

$i=0;

while($i<3){
	echo "ha";
	$i++;

}

echo "<br>";
//recursive function

function haha_recursive($i){
	if($i===3)
		return '';
	return 'ha'.haha_recursive(++$i);
}

echo haha_recursive(0);

echo PHP_EOL;


// factorial function
function factorial($val){
	if($val===1){
		return 1;
	}
	return $val * factorial($val-1);
}
echo factorial(5);