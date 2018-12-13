<?php
include_once("class.emailer.php");
print_r(get_declared_classes());
if( class_exists("Emailer"))
{
  var_dump('yes');
  $emailer = new Emailer("arshads@3esoftech.com");

}
else 
{
  die("A necessary class is not found");
}

class ParentClass
{
	 public function getClass(){
	 	var_dump($this);
    echo get_class($this); //using "$this"
  }
}

class ChildClass extends ParentClass 
{
}

$cc = new ChildClass();
echo get_class($cc)."<br/>";
if  (is_a($cc,"ChildClass")) echo "It's a ChildClass Type Object";
echo "<br>";
if  (is_a($cc,"ParentClass")) echo "It's also a ParentClass Type 
Object";


class Child extends ParentClass {
}
$obj = new Child();
$obj->getClass(); //outputs "child"
?>
