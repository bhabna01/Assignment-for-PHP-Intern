<?php

// Base class for Animal
class Animal {
    public function makeSound() {
        return "Some sound";
    }
}

// Dog class extending Animal
class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

// Cat class extending Animal
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

// Testing polymorphism
function animalSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

$dog = new Dog();
$cat = new Cat();

animalSound($dog);  // Output: Bark
animalSound($cat);  // Output: Meow

?>