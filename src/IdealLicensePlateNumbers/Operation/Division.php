<?php

namespace mespinosaz\IdealLicensePlateNumbers\Operation;

use mespinosaz\IdealLicensePlateNumbers\Operation;

class Division implements Operation
{
    public function process($a, $b)
    {
        return $a/$b;
    }
}