<!-- //this is how moodle coding style is -->

<?php
class html_writer{
	public static function tag($firstvar=null,$secondvar=null){
		if($firstvar=='h1')
		{
			return '<h1>'.$secondvar.'</h1>';
		}
		else 
		{
			echo 'not working';
		}
	}
}
echo "arshad";

$path = realpath(dirname(__FILE__) . '/../application');
echo $path;

echo '<h1>arshad</h1>';
$string=html_writer::tag('h1','3E software');
echo $string;
?>