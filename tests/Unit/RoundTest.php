<?php

namespace tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Studybe\Studybe\Round\Round;
use Studybe\Studybe\Round\Strategies\RoundDecimalPlus;
use Studybe\Studybe\Round\Strategies\RoundUnique;
use Studybe\Studybe\Round\Strategies\RoundDecimalTimes;

class RoundTest extends TestCase
{
 
    public function testRoundUniqueValidation()
    {
        $this->expectException(InvalidArgumentException::class);
        $round = new Round( new RoundUnique(['min'=>10, 'max'=>20]));
    }

    public function testRoundUniqueround()
    {
        $round = new Round(new RoundUnique(['min'=>5.6,'max'=>10,'minfor'=>6, 'maxfor'=>10]));
        $roundedGrade = $round->round(5.6);

        $this->assertEquals(6, $roundedGrade, 'Actual Grade');
    }

    public function testRoundDecimalPlus()
    {

        $round = new Round(new RoundDecimalPlus(['min'=>0.5, 'minPlus'=>0.5, 'max'=>null, 'maxMinus'=>null]));
        $grade =$round->round(5.5);
        $this->assertEquals(6, $grade);
    }

    public function testRoundDecimalTimes()
    {
        $round = new Round(new RoundDecimalTimes(['min'=>0.5, 'minTimes'=>1.2, 'max'=>0.9, 'maxTimes'=>1.2]));
    }
}