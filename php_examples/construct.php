<?php
define('breakline','<br>');
class course_creation{
	protected $comment;
	public function __construct(){
		$comment=20;
		echo "comment value=".$comment.breakline;
		echo "Iam in constructor function".breakline;
		
	}
	public function getfunction(){
		echo "comment value=".$this->comment.breakline;
		echo "This is getfunction".breakline;
	}
}

$object=new course_creation;
$object->getfunction();
