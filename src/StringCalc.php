<?php

class StringCalc {

    /**
     * @param $numbers
     * @returns the sum of all inputs
     */
    public function add($numbers) {
        if (!$numbers) {
            return 0;
        }
        $numberArr = preg_split("/(,|\n|\\s)/", $numbers);
        $this->validate($numberArr);
        return array_sum($numberArr);
    }

    protected function validate($numberArr) {
        foreach ($numberArr as $number) {
            if (!is_numeric($number)) {
                throw new InvalidArgumentException("'$number' is not a number");
            }
            if ($number < 0) {
                throw new InvalidArgumentException('Negative numbers are not allowed in this kata');
            }
        }
    }
}

?>
