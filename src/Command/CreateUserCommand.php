<?php
// src/Command/CreateUserCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreateUserCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new user.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a user...');
        $this
        // configure an argument
        ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.')
        // ...
    ;
    }
    protected function Palindrome(){
        return "Im a palindrome";
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);
    
        // the value returned by someMethod() can be an iterator (https://secure.php.net/iterator)
        // that generates and returns the messages with the 'yield' PHP keyword
        
        // outputs a message followed by a "\n"
        $output->writeln('Whoa!');
        $output->writeln($this->Palindrome());   
        // outputs a message without adding a "\n" at the end of the line
        $output->write('You are about to ');
        $output->write('create a user.');
         // retrieve the argument value using getArgument()
    $output->writeln('Username: '.$input->getArgument('username'));
        return 0;
    }
}
