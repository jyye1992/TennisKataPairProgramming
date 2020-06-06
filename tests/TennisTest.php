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
        $tennis = new Tennis();
        $actual = $tennis->score();

        $expected = 'love-all';

        $this->assertEquals($expected, $actual);
    }

    
    /**
     * @test
     */
    public function fifteen_love()
    {
        $tennis = new Tennis(1, 0);
        $actual = $tennis->score();

        $expected = 'fifteen-all';

        $this->assertEquals($expected, $actual);

    }


}
