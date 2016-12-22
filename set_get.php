<?php

class Post {
    private $name;
    
    public function __set($name, $value) {
        //echo "Setting ". $name . " value to " .$value;
        $this->name = $value;
    }
    
    public function set($mame, $value) {
        echo "Setting ". $mame . " value to " .$value;
        $this->name = $value;
    }
    
    public function __get($name){
        return $this->name;
    }
}

$user = new Post();

$user->name = "Marcin";

echo $user->name;





?>
