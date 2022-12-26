<?php

namespace Studybe\Studybe\Round;

use Studybe\Studybe\Round\InterfaceRound;

class Round implements InterfaceRound
{

    public InterfaceRound $roundType;

    public function __construct(InterfaceRound $roundType)
    {
        $this->roundType = $roundType;
    }

    public function validate($options): bool
    {
        return $this->roundType->validate($options);
    }


    public function round(int | float $grade): int|float
    {
        return $this->roundType->round($grade);
    }
}