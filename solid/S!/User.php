<?php

class User{
	protected $logger;
	public function __construct(Logger $logger){
		$this->logger=$logger;

	}

	public function create(array $data){
		try{
//user to data
		}catch(DatabaseException $e){
//$this->log($e->getMessage());
			$this->logger->writeToFile();
		}
	}

	/*N*/
}