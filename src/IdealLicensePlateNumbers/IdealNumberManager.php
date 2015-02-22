<?php

namespace mespinosaz\IdealLicensePlateNumbers;

use mespinosaz\Combinatorics\Permutations;
use mespinosaz\IdealLicensePlateNumbers\OperationInterface;

class IdealNumberManager
{
    /**
     * @param string $number
     * @return bool
     */
    public function isIdeal($number)
    {
        list($listsOfNumbers, $result) = $this->computeElements($number);
        $operations = $this->computeOperations();

        return $this->lookForResult($listsOfNumbers, $operations, $result);
    }

    /**
     * @param string $number
     * @return array
     */
    private function computeElements($number)
    {
        $licenseNumber = new LicenseNumber($number);
        $memberPermutations = new Permutations($licenseNumber->getOperators());
        $memberPermutations->removeDuplicates();
        return array($memberPermutations, $licenseNumber->getExpectedResult());
    }

    /**
     * @return Permutations
     */
    private function computeOperations()
    {
        $operations = $this->getOperations();
        $operationsPermutations = new Permutations($operations);
        return $operationsPermutations;
    }

    /**
     * @return array
     */
    private function getOperations()
    {
        return array(
            new Operation\Addition(),
            new Operation\Addition(),
            new Operation\Subtraction(),
            new Operation\Subtraction(),
            new Operation\Product(),
            new Operation\Product(),
            new Operation\Division(),
            new Operation\Division()
        );
    }

    /**
     * @param array $listsOfNumbers
     * @param array $listOfOperation
     * @param int $result
     * @return bool
     */
    private function lookForResult($listsOfNumbers, $listOfOperation, $result)
    {
        foreach($listsOfNumbers as $numberList)
        {
            list($a, $b, $c) = $numberList;
            foreach($listOfOperation as $operationList) {
                list($firstOperation, $secondOperation) = $operationList;
                $computedNumber = $secondOperation->process(
                    $firstOperation->process(
                        $a,
                        $b
                    ),
                    $c
                );
                if ($result == $computedNumber) {
                    return true;
                }
            }
        }

        return false;
    }
}
