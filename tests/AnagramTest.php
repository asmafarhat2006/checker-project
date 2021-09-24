<?php
namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Classes\Anagram;

class AnagramTest extends KernelTestCase {

    private $anagram;

    protected function setUp() : void {
        // (1) boot the Symfony kernel
        self::bootKernel();
        parent::setUp();
        $this->anagram = new Anagram();
    }

    public function testSuitableString() {
        $this->assertTrue($this->anagram->isAnagram('silent', 'listen'));
        $this->assertTrue($this->anagram->isAnagram('I am Lord Voldemort', 'Tom Marvolo Riddle'));
    }

    public function testNotSuitableString() {
        $this->assertFalse($this->anagram->isAnagram('anagram', 'palindrome'));
    }
}