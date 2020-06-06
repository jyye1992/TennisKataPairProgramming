<?php

namespace Tests;


use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    private $tennis;

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
    public function fifteen_love()
    {
        $this->givenFirstPlayerWinPoint( 1);
        $this->scoreShouldBe('fifteen-love');
    }

    protected function setUp()
    {
        $this->tennis = $tennis = new Tennis();
        parent::setUp();
    }

    private function scoreShouldBe($expected): void
    {
        $this->assertEquals($expected, $this->tennis->score());
    }

    /**
     * @param $point
     */
    private function givenFirstPlayerWinPoint($point): void
    {
        $this->tennis->firstPlayerWinPoint($point);
    }
}
