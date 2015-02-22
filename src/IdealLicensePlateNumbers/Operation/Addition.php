<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Addition implements OperationInterface
{
    public function process($a, $b)
    {
        return $a+$b;
    }
}
