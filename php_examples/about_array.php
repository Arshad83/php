<?php 

$users=array(
	'employee'=>'Arshad',
	'company'=>'3esoftware',
	'Designation'=>'software Engineer');

	//print_r($users);
	/**
	* print_r gives.
	* Array ( [employee] => Arshad [company] => 3esoftware [Designation] => software Engineer )
	**/

	//var_dump($users);
	/**
	* var_dump gives.
	* array(3) { ["employee"]=> string(6) "Arshad" ["company"]=> string(10) "3esoftware" ["Designation"]=> string(17) "software Engineer" }
	**/

	//echo $users['employee'];
	//$users['employee']; gives Arshad

	//echo $users->employee;
	/*Notice: Undefined variable: user in D:\xampp\htdocs\PHP\about_array.php on line 23

Notice: Trying to get property of non-object in D:\xampp\htdocs\PHP\about_array.php on line 23*/

// To get value 
/*class Employee{
	public function Employee(){
$users=array(
	'employee'=>'Arshad',
	'company'=>'3esoftware',
	'Designation'=>'software Engineer');
}
}
$user_data=new Employee;
$user_data->employee='ARshad';
print_r($user_data->employee);
*/

//To define array
$users_data=array();
// without key default 0.
$users_data[]="first value";
$users_data["KeyHere"]="secondvalue";

//to define values for objects
$users_data=new Classname;
$users_data->firstvalue="firstname";