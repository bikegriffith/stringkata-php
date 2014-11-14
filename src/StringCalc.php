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
        return array_sum($split);
    }
}

?>
