<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use AppBundle\Entity\Dog;
use AppBundle\Entity\Cat;

class PetCommand extends Command
{
    protected function configure()
    {
        $this->setName('app:pet-exercise')
             ->setDescription('Excercise the pets.')
             ->setHelp("This command runs through various pet exercises to show off Symfony and OOP.");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('Continue with this action?', false);

        if (!$helper->ask($input, $output, $question)) {
            return;
        }

        // a) Create a dog whose initial name is “Santa’s Little Helper” and whose initial age is a random integer between 1 and 3.
        $age = rand(1, 3);
        $dog = new Dog("Santa's Little Helper", $age);

        // b) Create a cat whose initial name is “Snowball II” and whose initial age is a random integer between 3 and 5.
        $age = rand(3, 5);
        $cat = new Cat("Snowball II", $age);

        // c) Output the dog’s current name and age as follows: “<dog_name> is currently <dog_age> years old.”
        $output->writeln($dog->getName() . " is currently " . $dog->getAge() . " years old.");

        // d) Output the following line: “<dog_name> says <dog_custom_sound>? Nah, <dog_name> says <dog_default_sound>! Now <dog_name> is <dog_age> years old.” 
        //    Use ‘meow’ for the dog’s custom sound.
        $dog->setSound('meow');
        $output->writeln($dog->getName() . " says " . $dog->speak() . "?");
        $dog->setSound(''); 
        $output->writeln("Nah, " . $dog->getName() . " says " . $dog->speak() . "!");
        $output->writeln("Now " . $dog->getName() . " is " . $dog->getAge() . " years old.");

        // e) Output the following line: “The cat’s name is <cat_name>.”
        $output->writeln("The cat’s name is " . $cat->getName() . ".");

        // f) Set the name of the cat to ‘Garfield’.
        $cat->setName("Garfield");

        // g) Output the following line: “The cat’s name has been changed to <cat_name>. The average length of the cat’s name is <cat_average_name_length>.”
        $output->writeln("The cat’s name has been changed to " . $cat->getName() . ". The average length of the cat’s name is " . $cat->getAverageNameSize() . ".");

    }
}