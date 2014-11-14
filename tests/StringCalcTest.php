<?php

require "StringCalc.php";

class StringCalcTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->calc = new StringCalc();
    }

    public function testAddsSimpleInputs() {
        $this->assertEquals(0, $this->calc->add(''));
    }
}

?>
