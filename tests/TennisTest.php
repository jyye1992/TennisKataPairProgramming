<?php

namespace Tests;


use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{

    /**
     * @test
     */
    public function love_all()
    {
        $expected = 'love-all';
        $tennis = new Tennis();

        $actual = $tennis->score();

        $this->assertEquals($expected, $actual);
    }


    /**
     * @test
     */
    public function fifteen_love()
    {
        $expected = 'fifteen-all';
        $tennis = new Tennis();

        $tennis->firstPlayerWinPoint(1);
        $actual = $tennis->score();

        $this->assertEquals($expected, $actual);
    }


}
