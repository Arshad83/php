<?php

$config['db']=array(
		'host'=> 'localhost',
		"username"=>'root',
		'password'=>'',
		'dbname'=>'pdo_learning'
);

$db=new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'],$config['db']['username'],$config['db']['password']);
$db->query("Insert into `articles` (`articles`.`title`) VALUES ('PDO Tutorial')");

header('location:posts.php?id='.$db->lastInsertId());

// in mysql exactly same

//mysql_insert_id();

exit();