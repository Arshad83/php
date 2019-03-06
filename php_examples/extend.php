<?php
class abc{
	protected $abc;
	public function __construct($a,$b){
		$abc=$a;
		echo $abc .$b;
	}
	public function m1(){
		echo 'abc of m1 method';
	}
}

$object =new abc(10,20);
$object->m1();