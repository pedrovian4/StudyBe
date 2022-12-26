<?php 

namespace Studybe\Studybe\Round;


interface InterfaceRound
{
    public function validate($options):bool;
    public function round(int | float $grade):int |float;


}