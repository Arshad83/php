<?php
abstract class calculation{
	public $value;
	public $name;
	public function __construct($value,$name){
		$this->value=$value;
		$this->name=$name;

		
	}

	
}
class Measure extends calculation{
	
	public $meaure;
	public function __construct($value,$string1,$string2){
		parent::__construct($value,$string2);
		$this->measure=$string1;
	}
	// public static function getCalculate($value,$string1){
	// 	parent::__construct($value,$string1);
	// }

}
class DD{
	public static function validate(calculation $measure){
		echo $measure->name;
	}
	public static function getParam(){
		return new Measure(20,'server','arshad');
	}
}
class Dimension extends DD{
	public function getValue(){
		self::validate(self::getParam());
	}
}
$obj=new Dimension;
$obj->getValue();