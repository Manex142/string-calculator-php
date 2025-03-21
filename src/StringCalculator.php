<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if (strpos($numbers, ',')) {
            return array_sum(explode(',', $numbers));
        }
        if (empty($numbers)) return 0;
        return $numbers;
    }
}