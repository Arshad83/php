<?php

class PaymentManager{
	protected $paypalipn;

	public function __construct(PaymentMethodInterface $paypalipn){
		$this-> paypalipn=$paypalipn;
	}

	public function process(){
		//
	}
}