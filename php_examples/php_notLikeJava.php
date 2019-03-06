<?php
/*--In java
* public class Employee
{
    public String name;
    public int age;
    public function index()
    {
        echo "inside index";
         Employee myEmployee=new Employee('arshad', 25);
        myEmployee.getDetails();
    }
    public function void Employee(name, age)
    {
        echo "inside constructor";
        this.name=$name;
        this.age=$age;
    }
    public function getDetails()
    {
       system.out.println("your name is"+this.name+" and age is "+this->age);
    }
}


*/
class Employee
{
    public $name;
    public $age;
    public function index()
    {
        echo "inside index";
    }
    public function __construct($name, $age)
    {
        echo "inside constructor";
        $this->name=$name;
        $this->age=$age;
    }
    public function getDetails()
    {
        echo "your name is".$this->name." and age is ".$this->age;
    }
}
   $myEmployee=new Employee('arshad', 25);
        $myEmployee->getDetails();
