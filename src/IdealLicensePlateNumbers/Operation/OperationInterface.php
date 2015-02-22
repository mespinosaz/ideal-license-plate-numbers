<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

interface OperationInterface
{
    /**
     * @param number $a
     * @param number $b
     * @return number
     */
    public function process($a,$b);
}