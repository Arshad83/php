<?php

namespace local_welcome;


class message {

    public $defaultfields;
    public $welcomefields;
    public $welcomevalues;
    public $customfields;

    public function __construct() {
        $this->defaultfields = $this->get_default_fields();
       /* $this->welcomefields = $this->get_welcome_fields();
        $this->welcomevalues = $this->get_welcome_values();
        $this->customfields = $this->get_custom_fields();*/
    }


    private function get_default_fields() {
        $defaultfields = array('username', 'fullname', 'firstname', 'lastname', 'email',
            'address', 'phone1', 'phone2', 'icq', 'skype', 'yahoo', 'aim', 'msn', 'department',
            'institution', 'interests', 'idnumber', 'lang', 'timezone', 'description',
            'city', 'url', 'country'
        );

        return $defaultfields;
    }

}

$object = new \local_welcome\message();
//$value= $object->defaultfields;
//var_dump($value);
$value=$object->get_default_fields();
echo $value;
