<!DOCTYPE html>
<html>
<body>
<!-- removes the / from front and end of the string -->
<?php
$str = "/Hello/Wor/ld//";
echo $str . "<br>";
echo trim($str,"/");
?>

</body>
</html>