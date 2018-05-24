<?php

/*class printer{

    public function print(){
        echo 'printing.......';
    }
}*/
class Document
{

    //public function setPrinter(Printer $printer)
    // Implicitly mentioning out class name
    public function setPrinter($printer)
    {
        $this->printer=$printer;
    }
    public function print()
    {
        $this->printer->print();
    }
}

/*$document=new Document;
$document->setPrinter(new printer);

$document->print();
*/

// now ananymous class
// class with no name, best for small code classes
$document=new Document;
$document->setPrinter(new class('canon IP'){
    public function __construct($printerName)
    {
        $this->printerName=$printerName;
    }
    public function print()
    {
        echo 'printing2 with '.$this->printerName;
    }
});
$document->print();

// another class
$laptop=new class("mac book"){
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function displayName()
    {
        echo 'display name of laptop'.$this->name;
    }
};
$laptop->displayName();
