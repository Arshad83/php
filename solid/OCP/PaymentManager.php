<?php

class PaymentManager{
	protected $paypal;

	public function __construct(PaymentMethodInterface $paypal){
		$this->paypal=$paypal;
	}
	public function process(){
		$this->PaypalIpn->processPayment();
	}
}