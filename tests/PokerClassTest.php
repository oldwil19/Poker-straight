<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PokerClassTest extends TestCase
{

    public function test1IsNotStraight():void
    {
        $this->assertFalse(
            PokerClass::isStraight([7, 7, 12 ,11, 3, 4, 14]));
    }

    public function test2IsStraight():void
    {
        $this->assertEquals(
            true,
            PokerClass::isStraight([2, 3, 4 ,5, 6]),
            "No es Escalera [2, 3, 4 ,5, 6]"
        );
    }

    public function test3IsStraightByAs():void
    {
        $this->assertEquals(
            true,
            PokerClass::isStraight( [14, 5, 4 ,2, 3]),
            "No es Escalera  [14, 5, 4 ,2, 3]"
        );
    }


    public function test4IsNotStraight():void
    {
        $this->assertFalse(
            PokerClass::isStraight( [7, 3, 2]),
            "No es Escalera  [7, 3, 23]"
        );
    }

}