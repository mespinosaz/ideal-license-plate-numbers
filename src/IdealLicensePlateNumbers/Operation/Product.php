<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

class Product implements OperationInterface
{
    public function process($a, $b)
    {
        return $a*$b;
    }
}
