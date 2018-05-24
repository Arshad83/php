<?php 
// regular funcion
function hello(){
	echo "Hello Arshad";
}

hello();


//Anonymout function

$hello2 = function(){
	echo "hello Anonymous function";
};

$hello2();



// Another format of Anonymous function
function printMessage($function){
	$function();
}

printMessage( function(){
	echo "hello Anonymous function";
});


$counter=0;

$closure=function() use (& $counter){
	return ++$counter;
};

// without modifying global variables to modify add &
echo $closure();// 1
echo $counter;// 0