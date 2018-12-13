<?php

require_once __DIR__ . '/vendor/autoload.php';

use Foggyline\MP7\Greeting\Welcome;

$greeting = new Welcome();

echo $greeting->generate('John');