<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Classes\Anagram;

class AnagramCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:check-anagram';

    protected function configure()
    {
        $this
        ->setName('anagram')
        ->setDescription('Checks whether two strings are anagrams.')
        ->addArgument('word', InputArgument::REQUIRED, 'The main word')
        ->addArgument('anagram', InputArgument::REQUIRED, 'Word to be checked if it is anagram with the main one')
        ->setHelp("An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.")
    ;
    ;
    }
   
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $word = $input->getArgument('word');
        $anagramWord = $input->getArgument('anagram');

        $anagram = new Anagram();

        if( $anagram->isAnagram($word, $anagramWord) ) {
            $output->writeln('These strings are anagrams!');
        } else {
            $output->writeln('These strings are not anagrams!');
        }
        return 0;
    }
}
