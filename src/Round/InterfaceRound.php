<?php

namespace Studybe\Studybe\Round;
use Studybe\Studybe\Criterium\Criterium;
interface InterfaceRound
{
    public function round(int | float $grade, array |callable $options);
}
