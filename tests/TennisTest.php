<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{

    /**
     * @test
     */
    public function love_all()
    {
        $tennis = new Tennis();
        $score = $tennis->score(0, 0);

        $expected = 'love-all';

        $this->assertEquals($expected, $score);
    }

}
