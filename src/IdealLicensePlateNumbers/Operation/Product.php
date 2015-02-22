<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Product implements OperationInterface
{
    /*
     * {@inheritDoc}
     */
    public function process($a, $b)
    {
        return $a*$b;
    }
}
