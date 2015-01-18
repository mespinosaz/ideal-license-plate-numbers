<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

use mespinosaz\IdealLicensePlateNumbers\Operation;

class Product implements Operation
{
    public function process($a, $b)
    {
        return $a*$b;
    }
}
