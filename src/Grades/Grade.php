<?php



namespace Studybe\Studybe\Grades;


use Studybe\Studybe\Grades\InterfaceGrade,
    Studybe\Studybe\Criterium\Criterium, 
    Studybe\Studybe\Round\Round;



class Grade implements InterfaceGrade
{


    public InterfaceGrade $gradeType;

    public function __construct(InterfaceGrade $gradeType )
    {
        $this->gradeType = $gradeType;

    }

    public function calculate(array $grades, Criterium $criterium, Round | null $round=null): string|array
    {
     
        
        return $this->gradeType->calculate($grades, $criterium, $round);
    }
}