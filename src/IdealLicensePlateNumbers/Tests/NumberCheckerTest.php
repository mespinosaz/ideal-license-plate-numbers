<?php

namespace mespinosaz\IdealLicensePlateNumbers\Tests;

use mespinosaz\IdealLicensePlateNumbers\IdealNumberManager;

class NumberCheckerTest extends \PHPUnit_Framework_TestCase
{
    private $manager;

    public function setUp()
    {
        $this->manager = new IdealNumberManager();
    }

    public function testAddition()
    {
        $this->assertTrue($this->manager->isIdeal(1113));
    }

    public function testSubtraction()
    {
        $this->assertTrue($this->manager->isIdeal(4857));
    }

    public function testProduct()
    {
        $this->assertTrue($this->manager->isIdeal(4357));
    }

    public function testDivision()
    {
        $this->assertTrue($this->manager->isIdeal(9331));
    }

    public function testNotIdeal()
    {
        $this->assertFalse($this->manager->isIdeal(9781));
    }
}