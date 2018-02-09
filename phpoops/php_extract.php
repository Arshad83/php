<?php
abstract class calculation{
	public $value;
	public function getCalculation($value){
		$this->value=$value;
	}
}
class Measure extends calculation{
	public $value=20;
	public $name="server";
	public $meaure="measure";
}

class Dimension{
	public function getValue(calculation $measure){
		echo $measure->value;
	}
}
$obj=new Dimension;
$obj->getValue(new Measure());