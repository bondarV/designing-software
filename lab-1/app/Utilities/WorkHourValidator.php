<?php

namespace Utilities;

class WorkHourValidator
{
    public static function validate(int|float $finalMonthWorkHours): void
    {
        if ($finalMonthWorkHours < 0) {
            throw new \Exception("The month work hours must be greater than 0");
        }
    }
}
