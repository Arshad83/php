<?php 
$paypalIpn= new PaypalIpn();
$creditCard= new CreditCard();
$paymentManager=new PaymentManager($creditcard);

$paymentManager->process();