<?php
require_once 'class.emailer.php';
$emailer = new emailer("arshads@3esofttech.com"); //construcion 
$emailer->addRecipients("engg.arshad83@gmail.com"); //accessing methods
$emailer->addRecipients("arshad.syed483@gmail.com");
// and passing some data
$emailer->setSubject("Php oop learning");
$emailer->setBody("Hi ra mama yala vunnavu ra?");
$emailer->sendEmail();
?>