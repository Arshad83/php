<!DOCTYPE html>
<html>
<body>

<?php
$cars=array("Volvo@fmail.com","BMW@3esoft,.com","Toyota@amul.com");
//$sorted=sort($cars);
//echo "sorted:".$sorted;
$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?>

</body>
</html>