<?php

namespace Studybe\Studybe\Round\Strategies;

use InvalidArgumentException;
use Studybe\Studybe\Round\InterfaceRound;

class RoundDecimalTimes implements InterfaceRound
{
    private array $options; 
    private array $optionsKeys = ['min', 'minTimes', 'max','maxTimes'];
   
    public function __construct(array $options)
    {
        if(!$this->validate($options)){
            throw new InvalidArgumentException(`These Keys are not able to to this class\nAllowed Keys : ['min', 'minTimes', 'max','maxTimes'] `);
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
            $decimal *=$this->options['minTimes'];
            $grade = ((int)$grade) + $decimal;
        }elseif($this->options['max'] && $this->options['max'] == $decimal){
            $decimal *= $this->options['maxTimes'];
            $grade = ((int)$grade) + $decimal;
         }
        return $grade;
    }


}