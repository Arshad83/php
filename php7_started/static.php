<?php

class user
{
    static $login;
    public $login_1;
    public $dy_var="hello world";
    public function amILogin()
    {
       // echo "you can use it bcoz it value is dynamic and calling inside static method ".$this->dy_var;
        echo "yes are login".self::$login;
    }
}

$userA=new user();
$userA->login_1="true";
//to access static properties
//$userA::login="true";

//or

user::$login="true";

$userB=new user();
$userB->login_1="false";

$userB::$login="false";

//difference between static and dynamic
echo $userA->login_1.PHP_EOL;// true
echo $userB->login_1.PHP_EOL;// false

echo $userA::$login . PHP_EOL;//false
echo user::$login . PHP_EOL;// false
