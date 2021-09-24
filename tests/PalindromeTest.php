<?php
namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Classes\Palindrome;

class PalindromeTest extends KernelTestCase {

    private $palindrome;

    protected function setUp() : void {
        // (1) boot the Symfony kernel
        self::bootKernel();
        parent::setUp();
        $this->palindrome = new Palindrome();
    }

    public function testSuitableString() {
        $this->assertTrue($this->palindrome->check('racecar'));
        $this->assertTrue($this->palindrome->check(151));
        $this->assertTrue($this->palindrome->check('was it a car or a cat i saw'));
    }

    public function testNotSuitableString() {
        $this->assertFalse($this->palindrome->check('some meaningless text'));
    }
}