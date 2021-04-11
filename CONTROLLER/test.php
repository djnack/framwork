<?php

function my_autoloader($class)
{
    // include 'CONTEROLLER/' . $class . '.php';
    include $class . '.php';
}

// spl_autoload_register('my_autoloader');
my_autoloader('index');
