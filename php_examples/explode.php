<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//sql to create table
//$email='veerdas@gmail.com';
//$id=3;
//$sql="INSERT INTO `block_simplenotify`(`id`,`email`) VALUES ('$id','$email')";

//if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
//} else {
 //   echo "Error: " . $sql . "<br>" . $conn->error;
//}

$str = "arshad@gmail.com,anmolp@gmail.com,veer@gmail.com,anil@gmail.com";
$emails=explode(",",$str);
$key=4;
foreach($emails as $email){
//echo $email.'<br>';
$sql="INSERT INTO `block_simplenotify`(`id`,`email`) VALUES ('$key','$email')";
}
$conn->close();
?>
 -->
<!DOCTYPE html>
<html>
<body>

<?php
$first=array('arshad','hyder','javeed');
print_r($first[1]);
$str = "Hello world. It's a beautiful day.";
$data=explode(" ",$str);
//echo $data; it will error array to string convertion.
foreach($data as $key=>$value){
	echo $key." ".$value.'<br/>';
}
?> 

</body>
</html>