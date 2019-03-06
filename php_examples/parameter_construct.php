<?php

class Item{
private $itemname,
        $itemprice;

public function __construct($name=null,$itemprice){
$this->itemname = $name;
           $this->itemprice = $price;   
       }
       
       /* Function to get name of item */
      function getName(){
         echo $this->itemname ."
";
      }
       

       /* Function to get price of item */
      function getPrice(){
         echo $this->itemprice ." 
";
      }
   }

// Creating objects of Item class.

$item1 = new Item("Laptop", 35000);
$item2 = new Item("LCD", 10000);

$item1 -> getName();
$item1 -> getPrice();

$item2 -> getName();
$item2 -> getPrice();

?>