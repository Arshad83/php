<?php
$car['test']=array('first'=>'maruti','suzuki','third'=>'kwid');

var_dump($car['test']);
echo '<br/>';
var_dump($car);
echo '<br/>';
$car=array('first'=>array('m1'=>'maruti_volta',
                        'm2'=>'maruti_x'
                            ),
            'second'=>'suzuki',
            'third'=>'kwid');
var_dump($car);
?>
<!-- output

array(3) { ["first"]=> string(6) "maruti" [0]=> string(6) "suzuki" ["third"]=> string(4) "kwid" } 
array(1) { ["test"]=> array(3) { ["first"]=> string(6) "maruti" [0]=> string(6) "suzuki" ["third"]=> string(4) "kwid" } } 
array(3) { ["first"]=> array(2) { ["m1"]=> string(12) "maruti_volta" ["m2"]=> string(8) "maruti_x" } ["second"]=> string(6) "suzuki" ["third"]=> string(4) "kwid" }


 -->