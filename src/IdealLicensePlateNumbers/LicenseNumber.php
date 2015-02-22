<?php

namespace mespinosaz\IdealLicensePlateNumbers;


class LicenseNumber
{
    /**
     * @var int
     */
    private $expectedResult;
    /**
     * @var array
     */
    private $operators;

    /**
     * @param string $number
     */
    public function __construct($number)
    {
        $members = str_split($number);
        $this->expectedResult = array_pop($members);
        $this->operators = $members;
    }

    /**
     * @return int
     */
    public function getExpectedResult()
    {
        return $this->expectedResult;
    }

    /**
     * @return array
     */
    public function getOperators()
    {
        return $this->operators;
    }


} 