<?php


namespace App;


class Tennis
{
    private $firstPlayerPoint;
    /**
     * @var int
     */
    private $secondPlayerPoint;

    public function score()
    {
        if ($this->firstPlayerPoint == 1 && $this->secondPlayerPoint == 1) {
            return 'fifteen-all';
        }

        if ($this->firstPlayerPoint == 1) {
            return 'fifteen-love';
        }

        return 'love-all';
    }

    public function firstPlayerWinPoint($point)
    {
        $this->firstPlayerPoint = $point;
    }

    public function secondPlayerWinPoint(int $point)
    {
        $this->secondPlayerPoint = $point;
    }
}