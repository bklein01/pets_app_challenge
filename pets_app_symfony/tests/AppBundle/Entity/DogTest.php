<?php
namespace Tests\AppBundle\Model;

use AppBundle\Entity\Dog;

class DogTest extends \PHPUnit_Framework_TestCase
{
    public function testAvgNameSize()
    {
        // Create a test that tests step #6 (the test should verify that we’re able to correctly calculate 
        // the average of all names given to the pet).

        $dog = new Dog('Marley', 5);
        $dog->setName('Spot');
        $dog->setName('Bob');
        $dog->setName('Tom');

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(4, $dog->getAverageNameSize());
    }

    public function testAgeIncr()
    {
        // Create a test that tests step #5 (the test should verify that each pet increments its age by 1 every 2 times it speaks).

        $dog = new Dog('Marley', 5);
        $dog->speak();
        $dog->speak();

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(6, $dog->getAge());
    }

}