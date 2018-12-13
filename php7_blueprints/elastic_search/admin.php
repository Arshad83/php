<form action="admin.php" method="post"> 
Username: <input type="text" name="username"><br /> 
Password: <input type="text" name="password"><br /> 
<input type="submit" name="submit"> 
</form> 
<?php 
$db = new mysqli(); //etc 
 
 
Function checkPassword($username, $password) { 
//generate hash 
    $bpassword = password_hash($password); 
 
//clean up username for sanitization 
$username = $db->real_escape_string($username); 
 
    $query = mysqli_query("SELECT * FROM users WHERE password='".$bpassword."' AND username = '". $username. "'"); 
if($query->num_rows() > 0) { 
return true; 
     } 
return false; 
} 
 
if(isset$_POST['password']) && isset ($_POST['username']) ) { 
if(checkPassword($_POST['username'], $_POST['password'])) { 
$_SESSION['admin'] = true; 
$_SESSION['logged_in'] = true; 
$_SESSION['expires'] = 3600; //1 hour 
      $_SESSION['signin_time'] = time(); //unix time 
      header('Location: admin_crud_posts.php'); 
} 
else { 
       //lead the user out 
header('Location: logout.php'); 
    } 
   } 
} 