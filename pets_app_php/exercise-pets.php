#!/usr/bin/env php
<?php
require_once 'bootstrap.php';

use App\Model\Dog;
use App\Model\Cat;

// a) Create a dog whose initial name is “Santa’s Little Helper” and whose initial age is a random integer between 1 and 3.
$age = rand(1, 3);
$dog = new Dog("Santa's Little Helper", $age);

// b) Create a cat whose initial name is “Snowball II” and whose initial age is a random integer between 3 and 5.
$age = rand(3, 5);
$cat = new Cat("Snowball II", $age);

// c) Output the dog’s current name and age as follows: “<dog_name> is currently <dog_age> years old.”
echo $dog->getName() . " is currently " . $dog->getAge() . " years old.\n";

// d) Output the following line: “<dog_name> says <dog_custom_sound>? Nah, <dog_name> says <dog_default_sound>! Now <dog_name> is <dog_age> years old.” 
//    Use ‘meow’ for the dog’s custom sound.
$dog->setSound('meow');
echo $dog->getName() . " says " . $dog->speak() . "?\n";
$dog->setSound(''); 
echo "Nah, " . $dog->getName() . " says " . $dog->speak() . "!\n";
echo "Now " . $dog->getName() . " is " . $dog->getAge() . " years old.\n";

// e) Output the following line: “The cat’s name is <cat_name>.”
echo "The cat’s name is " . $cat->getName() . ".\n";

// f) Set the name of the cat to ‘Garfield’.
$cat->setName("Garfield");

// g) Output the following line: “The cat’s name has been changed to <cat_name>. The average length of the cat’s name is <cat_average_name_length>.”
echo "The cat’s name has been changed to " . $cat->getName() . ". The average length of the cat’s name is " . $cat->getAverageNameSize() . ".\n";
