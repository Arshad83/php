<?php
require_once('extend.php');
class xyz extends abc{

public function m2(){
	echo "xyz of m2 method".$this->abc;
}

}


$object =new xyz(40,50);
$object->m2();