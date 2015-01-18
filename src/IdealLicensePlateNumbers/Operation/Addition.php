<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

use mespinosaz\IdealLicensePlateNumbers\Operation;

class Addition implements Operation
{
    public function process($a, $b)
    {
        return $a+$b;
    }
}
