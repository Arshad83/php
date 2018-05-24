<?php
   class Car { 
      public function setColor($color){
         $this->color=$color;
      } 
   }
   class Motor {
          public function setbrand($brand){
         $this->brand=$brand;
      }
   }

   $obj1 = new Car();
   $obj1->setColor('red');
   $obj2 = new Motor();
   $obj2->setbrand('Hundai');

   $serialized=serialize([$obj1,$obj2]);

   var_dump($serialized);

   var_dump(unserialize($serialized,['allowed_classes'=>['Motor']]));



?>