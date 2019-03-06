<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red", "green", "blue", "yellow"); 
$t = date("H");

$first="arshad";
$second="syed";
$third=$first.$second;
echo $third;

foreach ($colors as $value) {
  echo "$value <br>";
  if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
}
?>  

</body>
</html>