<?php


namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use Studybe\Studybe\Grades\Grade;
use Studybe\Studybe\Grades\Strategies\FinalGradeStrategy;

class GradeTest extends TestCase
{
    public function testGradeCalculator()
    {
        $grade = new Grade( new FinalGradeStrategy());
    }
}