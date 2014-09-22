<?php

namespace A6\CodeceptIsAwesomeBundle\Service;

class FizzBuzzService
{
    public function doFizzBuzzer($start = 1, $end = 100)
    {
        $results = array();

        for ($i = $start; $i <= $end; $i++) {
            $results[] = $this->getResult($i);
        }

        return $results;
    }

    public function getResult($number)
    {
        $result = $number;

        if ($this->isMultipleOfThree($number) && $this->isMultipleOfFive($number)) {
            $result = 'FizzBuzz';
        } elseif ($this->isMultipleOfThree($number)) {
            $result = 'Fizz';
        } elseif ($this->isMultipleOfFive($number)) {
            $result = 'Buzz';
        }

        return $result;
    }

    /**
     * @param $number
     * @return bool
     */
    private function isMultipleOfThree($number)
    {
        return $number % 3 === 0;
    }

    /**
     * @param $number
     * @return bool
     */
    private function isMultipleOfFive($number)
    {
        return $number % 5 === 0;
    }
}