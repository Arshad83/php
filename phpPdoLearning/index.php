<?php

$config['db']=array(
		'host'=> 'localhost',
		"username"=>'root',
		'password'=>'',
		'dbname'=>'pdo_learning'
);

$db=new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'],$config['db']['username'],$config['db']['password']);

$query=$db->query('select * from `articles`');

/*while($row=$query->fetch(PDO::FETCH_ASSOC)){
	echo $row['title'].'<br>';
}*/

// Another method

$row=$query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'.print_r($row,true).'</pre>';

//rowCount() depends on the Query eg: Select(who many selected)
// Delete (how many deleted),update(how many deleted)
echo '<p>Returned rows=',$query->rowCount(),'</p>';

//$query=$db->prepare("Select `articles`.`title` FROM `articles` WHERE `articles`.`title` LIKE '%The%'");


//localhost/phpPdoLearning/search=the
//$query=$db->prepare("Select `articles`.`title` FROM `articles` WHERE `articles`.`title` LIKE '%".mysql_real_escape_string($_GET['search']."%'");


$query=$db->prepare("Select `articles`.`title` FROM `articles` WHERE `articles`.`title` LIKE :search");
$search =(isset($_GET['search'])===true)?$_GET['search'] :'';
$query->bindValue(':search','%'.$search.'%',PDO::PARAM_STR);
//do stuff here
$query->execute();
$rows=$query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'.print_r($rows,true).'</pre>';