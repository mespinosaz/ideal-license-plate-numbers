<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Division implements OperationInterface
{
    /*
     * {@inheritDoc}
     */
    public function process($a, $b)
    {
        return $a/$b;
    }
}
