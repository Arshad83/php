<?php

$logger=new Logger();
$errorHandler=new ErrorHandler($logger):
;
$errorHandler->errorHandler();
$errorHandler->exceptionHandler();