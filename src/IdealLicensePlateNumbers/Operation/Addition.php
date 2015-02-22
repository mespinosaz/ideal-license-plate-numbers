<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Addition implements OperationInterface
{
    /*
     * {@inheritDoc}
     */
    public function process($a, $b)
    {
        return $a+$b;
    }
}
