<?php

class People {
    public $person1 = "Marcin";
    public $person2 = "Agnieszka";
    public $person3 = "Ania";
    protected $person4 = "Maja";
    private $person5 = "Hipo";
    
    public function iterateObject() {
        foreach ($this as $key => $value) {
            echo "$key => $value<br/>";
        }
    }
}

$all = new People;
//this will not echo protected and private (not throwing error);
foreach ($all as $key => $value) {
            echo "$key => $value<br/>";
 }
 echo "<hr/>";

 //show all properties
$all->iterateObject();

?>
