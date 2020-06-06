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
        $actual = $tennis->score();

        $expected = 'love-all';

        $this->assertEquals($expected, $actual);
    }

}
