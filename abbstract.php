<?php
//abstract class can not be instantiated, class needs to be abstract if at has at least one abstract method!;
abstract class Animal {
    public $name;
    public $color;
    
    public function describe(){
        return $this->name. " is ". $this->color."<br/>";
    }
    
    abstract public function makeSound() ;
}

class Duck extends Animal {
    
    public function describe() {
        return parent::describe();
    }
    
    public function makeSound() {
        return "kwack";
    }
    
}
    
class Dog extends Animal {
    
    public function describe() {
        return parent::describe();
    }
    
    public function makeSound() {
        return "how how";
    }

}

$duck = new Duck;
$duck->name = "Ben";
$duck->color ="grey";
echo $duck->describe();
echo $duck->makeSound();
echo "<br/>";
$dog = new Dog;
$dog->name = "Atos";
$dog->color = "black";
echo $dog->describe();
echo $dog->makeSound();
echo "<br/>";
?>
