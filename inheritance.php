<?php

class First {
    public $id = 23;
    public $name = "Marcin";
    
    public function say() {
        echo "His name is ".$this->name;
    }
}

class Second extends First {}

$user = new Second;

$user -> say();

?>
