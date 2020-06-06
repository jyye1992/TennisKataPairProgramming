<?php


namespace App;


class Tennis
{
    private $firstPlayerPoint;

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'fifteen-love';
        }

        return 'love-all';
    }

    public function firstPlayerWinPoint($point)
    {
        $this->firstPlayerPoint = $point;
    }
}