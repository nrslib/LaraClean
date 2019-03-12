<?php

namespace App\Repositories\Calculation;


class CalculationRepository implements CalculationRepositoryInterface
{
    // 加算
    public function add($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }

    // 減算
    public function sub($arg1, $arg2)
    {
        return $arg1 - $arg2;
    }

    // 乗算
    public function mul($arg1, $arg2)
    {
        return $arg1 * $arg2;
    }

    // 除算
    public function div($arg1, $arg2)
    {
        return $arg1 / $arg2;
    }
}
