<?php

namespace Weald\Test\Control;

use PHPUnit\Framework\TestCase;
use Poing\Weald\Control;

class ControlTest extends TestCase
{
    use MyTrait;

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function trait_test()
    {
        $this->assertTrue($this->stub());
    }
    
    /** @test */
    public function hello_world()
    {
    	$this->assertTrue((Control::hello() == "world"));
    }
}
