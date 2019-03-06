<?php
require_once 'another.php';

$username=$_POST['username'];
$password=$_POST['password'];

nextclass::getdetail($username,$password);


?>



<form action="" method="post">
<div class="field">
<input type="text" name="username">
<input type="password" name="password">
<button>submit</button>
</div>
</form>