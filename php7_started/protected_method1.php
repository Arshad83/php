<?php

class Person
{

    public function getName()
    {
        echo "my name is Arshad".PHP_EOL;
        $this->getBirthday();
    }
    function getBirthday()
    {
        echo "Birthday is 20-2-2".PHP_EOL;
        $this->howOld();
    }
    private function howOld()
    {
        echo "Iam 20 years".PHP_EOL;
        $this->areYouSingle();
    }
    protected function areYouSingle()
    {
        echo "Yes I am single".PHP_EOL;
    }
}
$obj=new Person();
$obj->getName();
