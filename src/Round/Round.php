<?php



namespace Studybe\Studybe\Round;

use PhpParser\Builder\Interface_;
use Studybe\Studybe\Criterium\Criterium;

class Round implements InterfaceRound
{

    public InterfaceRound $roundType;

    public function __construct(InterfaceRound $roundType)
    {
        $this->$roundType = $roundType;
    }

    public function round(int|float $grade, array | callable $options)
    {
        $roundedGrade = $this->roundType->round($grade,$options);        

        return $roundedGrade;
    }
    
}
