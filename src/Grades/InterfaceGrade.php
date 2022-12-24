<?php


namespace Studybe\Studybe\Grades;

use Studybe\Studybe\Criterium\Criterium;
use Studybe\Studybe\Round\Round;

interface InterfaceGrade
{
    public function calculate( array $grades, Criterium $criterium, Round $round): string | array;   
} 