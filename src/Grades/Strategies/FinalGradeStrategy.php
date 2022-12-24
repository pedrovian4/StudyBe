<?php


namespace Studybe\StudyBe\Grades\Strategies;

use Studybe\Studybe\Grades\InterfaceGrade,
    Studybe\Studybe\Criterium\Criterium, 
    Studybe\Studybe\Round\Round;


class FinalGradeStrategy implements InterfaceGrade
{
    public function calculate(array $grades, Criterium $criterium, Round $round): string|array
    {
        return [];
    }
}