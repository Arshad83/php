<?php

class ErrorHandler{
	protected $logger;
public function __construct(Logger $logger){


$this->logger=$logger;
}
	public function errorHandler(){
}

try{

}catch(Error $e){
$this->LogError($e);
}
	}
	public function exceptionHandler(){
try{

}catch(Error $e){
$this->LogError($e);
}
	}
/*
	public function logError(){

	}*/
}