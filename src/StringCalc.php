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
        $split = preg_split("/(,|\n|\\s)/", $numbers);
        foreach ($split as $number) {
            if ($number < 0) {
                throw new InvalidArgumentException('Negative numbers are not allowed in this kata');
            }
        }
        return array_sum($split);
    }
}

?>
