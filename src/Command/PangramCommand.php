<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Classes\Pangram;

class PangramCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:check-pangram';

    protected function configure()
    {
        $this
        ->setName('Pangram')
        ->setDescription('Checks whether a string is pangram or now.')
        ->addArgument('sentence', InputArgument::REQUIRED, 'The sentence to be checked as pangram')
        ->setHelp("Check the sentence and return true if it contains at least one instance of every letter in the English alphabet.")
    ;
    ;
    }
   
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sentence = $input->getArgument('sentence');
      
        $pangram = new Pangram();

        if( $pangram->isPangram($sentence) ) {
            $output->writeln('The string is pangram');
        } else {
            $output->writeln('The string is not pangram');
        }
        return 0;
    }
}
