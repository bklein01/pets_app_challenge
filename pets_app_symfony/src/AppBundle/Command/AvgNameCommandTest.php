<?php
namespace Tests\AppBundle\Command;

use AppBundle\Command\CreateUserCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class AvgNameCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        // Create a test that tests step #6 (the test should verify that we’re able to correctly calculate 
        // the average of all names given to the pet).
        
        $application = new Application();
        $application->add(new CreateUserCommand());

        $command = $application->find('app:pet-excercise');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command'  => $command->getName(),

            // pass arguments to the helper
            'username' => 'Wouter',

            // prefix the key with a double slash when passing options,
            // e.g: '--some-option' => 'option_value',
        ));

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('Username: Wouter', $output);

        // ...
    }
}