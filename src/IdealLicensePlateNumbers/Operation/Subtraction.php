<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Subtraction implements OperationInterface
{
    /*
     * {@inheritDoc}
     */
    public function process($a, $b)
    {
        return $a-$b;
    }
}
