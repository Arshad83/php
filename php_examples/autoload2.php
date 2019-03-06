<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
class autolaod2{
	public static function print_details(){
		echo 'this is from second class';
		$objectfirst=new autoload1;
	  $objectfirst->getdetails();
	}
	 

}

$object=autoload2::print_details();

echo $object;