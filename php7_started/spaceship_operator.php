<?php

$scores=[80,20,60,40];

// while using usort we need a collback function
usort($scores,function($score1,$score2){
	if($score1 == $score2){
		return 0;
	}
	/**
	* 1==1 ; 0
	* 1 < 2 ; -1
	* 2 < 1 ; 1
	*/
	return $score1 < $score2 ? -1 : 1;
});

var_dump($scores);


// Using spaceshop

// we can reduce the code

usort($scores,function($score1,$score2){
	
	/* 1 <=> 1 ; 0
	*  1 <=>2 ; -1
	* 2 <=> 1; 1
	*/
	return $score1 <=> $score2;
});

var_dump($scores);