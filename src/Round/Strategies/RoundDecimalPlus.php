<?php

namespace Studybe\Studybe\Round\Strategies;

use InvalidArgumentException;
use Studybe\Studybe\Round\InterfaceRound;

class RoundDecimalPlus implements InterfaceRound
{
    private array $options; 
    private array $optionsKeys = ['min', 'minPlus', 'max','maxMinus'];
   
    public function __construct(array $options)
    {
        if(!$this->validate($options)){
            throw new InvalidArgumentException(`These Keys are not able to to this class\nAllowed Keys : ['decimalMin', 'decimalMinForPlus', 'decimalMax','decimalMaxForPlus'] `);
        }
        $this->options = $options;
    }


    public function validate($options): bool
    {
        if(array_keys($options) != array_values($this->optionsKeys))
            return false;
        return true;
    }

    public function round(int|float $grade): int|float
    {
        $decimal  = $grade - (int)$grade ;
        if( $this->options['min'] && $this->options['min'] == $decimal){
            $decimal+=$this->options['minPlus'];
            $grade = ((int)$grade) + $decimal;
        }elseif($this->options['max'] && $this->options['max'] == $decimal){
            $decimal -= $this->options['maxMinus'];
            $grade = ((int)$grade) + $decimal;
         }
        return $grade;
    }


}