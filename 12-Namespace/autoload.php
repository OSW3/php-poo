<?php

spl_autoload_register("autoloader");

function autoloader($class)
{
    echo $class."<br>";

    $class = preg_replace("/\\\/", DIRECTORY_SEPARATOR, $class);
    echo $class."<br>";

    $file = __DIR__.DIRECTORY_SEPARATOR.$class.".php";
    echo $file."<br>";
    
    echo "<br>";

    // echo $class;

    include_once $file;
}