<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Subtraction implements OperationInterface
{
    public function process($a, $b)
    {
        return $a-$b;
    }
}
