<?php

namespace Vendor\Package\Tests;

use Vendor\Package\ExampleClass;

class ExampleClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers \Vendor\Package\ExampleClass::add
     */
    public function can_add_numbers()
    {
        $example = new ExampleClass();

        assertThat($example->add(3, 7), is(10));
    }
}
