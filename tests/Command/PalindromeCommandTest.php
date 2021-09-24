<?php

namespace App\Tests\Command;

use App\Command\PalindromeCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class PalindromeCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);

        $command = $application->find('app:check-palindrome');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command'  => $command->getName(),

            // pass arguments to the helper
            'string' => 'anna'
         

            // prefix the key with two dashes when passing options,
            // e.g: '--some-option' => 'option_value',
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('This string is palindrome!', $output);

        // ...
    }
}