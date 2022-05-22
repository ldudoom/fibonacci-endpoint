<?php

namespace App\Services;

use App\Interfaces\FibonacciInterface;

class CellphonePriceService implements FibonacciInterface
{
    public function getValue(int $index): int{
        $num1 = 0;
        $num2 = 1;
        $counter = 0;
        while ($counter <= $index){
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        }
        return $num1;
    }
}
