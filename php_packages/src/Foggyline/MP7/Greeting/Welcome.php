<?php

namespace Foggyline\MP7\Greeting;

class Welcome
{
    public function generate($name)
    {
        return 'Welcome ' . $name;
    }
}