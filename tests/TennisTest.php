<?php

namespace Tests;


use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    private $tennis;

    protected function setUp()
    {
        $this->tennis = $tennis = new Tennis();
        parent::setUp();
    }

    /**
     * @test
     */
    public function love_all()
    {
        $this->scoreShouldBe('love-all');
    }

    /**
     * @test
     */
    public function love_thirty()
    {
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('love-thirty');
    }

    /**
     * @test
     */
    public function love_fifteen()
    {
        $this->givenSecondPlayerWinPoint(1);
        $this->scoreShouldBe('love-fifteen');
    }

    /**
     * @test
     */
    public function fifteen_love()
    {
        $this->givenFirstPlayerWinPoint(1);
        $this->scoreShouldBe('fifteen-love');
    }

    /**
     * @test
     */
    public function thirty_love()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->scoreShouldBe('thirty-love');
    }

    /**
     * @test
     */
    public function fifteen_all()
    {
        $this->givenFirstPlayerWinPoint(1);
        $this->givenSecondPlayerWinPoint(1);

        $this->scoreShouldBe('fifteen-all');
    }



    private function scoreShouldBe($expected): void
    {
        $this->assertEquals($expected, $this->tennis->score());
    }

    /**
     * @param $point
     */
    private function givenSecondPlayerWinPoint($point): void
    {
        $this->tennis->secondPlayerWinPoint($point);
    }

    /**
     * @param $point
     */
    private function givenFirstPlayerWinPoint($point): void
    {
        $this->tennis->firstPlayerWinPoint($point);
    }
}
