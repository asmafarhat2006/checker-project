<?php

namespace App\Tests\Command;

use App\Command\AnagramCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class AnagramCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);

        $command = $application->find('app:check-anagram');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command'  => $command->getName(),

            // pass arguments to the helper
            'word' => 'Wouter',
            'anagram'=>'silent'

            // prefix the key with two dashes when passing options,
            // e.g: '--some-option' => 'option_value',
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('These strings are not anagrams!', $output);

        // ...
    }
}