<?php


namespace App;


class Tennis
{
    /**
     * @var int
     */
    private $firstPlayerPoint;

    /**
     * @var int
     */
    private $secondPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 2) {
            return 'thirty-love';
        }

        if ($this->firstPlayerPoint == 1 && $this->secondPlayerPoint == 1) {
            return 'fifteen-all';
        }

        if ($this->firstPlayerPoint == 1) {
            return 'fifteen-love';
        }

        return 'love-all';
    }

    public function firstPlayerWinPoint(int $point)
    {
        $this->firstPlayerPoint = $point;
    }

    public function secondPlayerWinPoint(int $point)
    {
        $this->secondPlayerPoint = $point;
    }
}
