<?php

$config['db']=array(
		'host'=> 'localhost',
		"username"=>'root',
		'password'=>'',
		'dbname'=>'pdo_learning'
);

$db=new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'],$config['db']['username'],$config['db']['password']);
/*stict errors,means in database table is articles but u spelled as article then gives error
*/
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$query=$db->prepare("Select `articles`.`title` FROM `articles` WHERE `articles`.`title` LIKE :search");
$search =(isset($_GET['search'])===true)?$_GET['search'] :'';
$query->bindValue(':search','%'.$search.'%',PDO::PARAM_STR);

try{
//do stuff here
	//execute gives an error if any mistakes observed
$query->execute();
// instead of try catch you can use
//echo '<pre>'.print_r($query->errorInfo().true),'</pre>';
$rows=$query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'.print_r($rows,true).'</pre>';
}catch(PDOException $e){
	die($e->getMessage());
}