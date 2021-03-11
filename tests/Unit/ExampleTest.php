<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testIfPhpUnitTestIsWorking()
    {
        $a = 'a';
        $this->assertEquals('a', $a);
    }
}
