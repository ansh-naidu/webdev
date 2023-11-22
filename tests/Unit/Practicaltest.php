<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase {
    public function testAddAcceptsFloat() {
        $this->assertSame(5.0, Practical::add(1.5, 3.5));
    }

    public function testAddAcceptsFloatInteger() {
        $this->assertSame(3.5, Practical::add(1.5, 2));
    }

    public function testAddAcceptsIntegerString() {
        $this->assertSame(3, Practical::add("1", "2"));
    }

    public function testAddAcceptsFloatString() {
        $this->assertSame(5.54, Practical::add("1.4", "3.14"));
    }

    public function testAddRejectsAlphabetString() {
        $this->expectException(InvalidArgumentException::class);
        Practical::add("abc", "xyz");
    }

    public function testAddRejectsAlphanumericString() {
        $this->expectException(InvalidArgumentException::class);
        Practical::add("a1", 1);
    }
}

?>