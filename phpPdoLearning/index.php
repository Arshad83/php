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