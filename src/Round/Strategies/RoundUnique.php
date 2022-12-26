<?php

namespace Studybe\Studybe\Round\Strategies;

use InvalidArgumentException;
use Studybe\Studybe\Round\InterfaceRound;

class RoundUnique implements InterfaceRound
{

    private array $options; 
    private array $optionsKeys = ['min', 'max', 'minfor', 'maxfor'];
   
    public function __construct(array $options)
    {
        if(!$this->validate($options)){
            throw new InvalidArgumentException(`These Keys are not able to to this class\nAllowed Keys : ['min', 'max', 'minfor', 'maxfor'] `);
        }
        $this->options = $options;
    }


    public function validate($options): bool
    {
        if(array_keys($options) != array_values($this->optionsKeys))
            return false;
        return true;
    }

    public function round(int | float $grade): int|float
    {   
        if($grade > $this->options['max']){
            return $this->options['maxfor'];
        }

        if($grade == $this->options['min']){
            return $this->options['minfor'];
        }

        return $grade;        

    }
}