<?php

/**
 * String Calculator
 */
class StringCalc {

    /**
     * Process the string of input as if a (strange) calculator were adding it.
     *
     * @param String
     * @return Decimal
     */
    public function add($input) {
        if (!$input) {
            return 0;
        }
        $numberArr = preg_split("/(,|\n|\\s|\\+)/", $input);
        $numberArr = $this->filter($numberArr);
        $this->validate($numberArr);
        return array_sum($numberArr);
    }

    /**
     * Ignore (but don't raise Exception) anything that matches the following
     * criteria:
     *   - Over 1000
     *   - Whitespace
     * 
     * @param Array
     * @return Array
     */
    protected function filter($numberArr) {
        return array_filter($numberArr, function($number) {
                return $number && $number <= 1000;
            });
    }

    /**
     * Process validation criteria and raise an exception if any issues are
     * found.
     * 
     * @param Array
     */
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
