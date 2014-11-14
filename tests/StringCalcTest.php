<?php

require "StringCalc.php";

class StringCalcTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->calc = new StringCalc();
    }

    public function testAddsSimpleInputs() {
        $this->assertEquals(0, $this->calc->add(''));
        $this->assertEquals(123, $this->calc->add('123'));
        $this->assertEquals(246, $this->calc->add('123,123'));
    }

    public function testAddsWithMultipleDelimeters() {
        $this->assertEquals(10, $this->calc->add("1\n2,3 4"));
    }

    public function testRejectsNegativeNumbers() {
        $this->setExpectedException('InvalidArgumentException');
        $this->calc->add('-1,-2');
    }

    public function testRejectsNonNumbers() {
        $this->setExpectedException('InvalidArgumentException');
        $this->calc->add('a,b');
    }
}

?>
