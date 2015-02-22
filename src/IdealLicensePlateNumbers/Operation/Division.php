<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Division implements OperationInterface
{
    public function process($a, $b)
    {
        return $a/$b;
    }
}
