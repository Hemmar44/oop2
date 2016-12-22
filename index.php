<?php

//include 'foo.php';
//include 'bar.php';

spl_autoload_register(function($class_name){
    include $class_name . ".php";
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo "<br/>";
$bar->niewierze();
echo "<br/>";
$bar->sayHello();



?>
