<?php


namespace App;


class Tennis
{
    /**
     * @var int
     */
    private $firstPlayerPoint = 0;

    /**
     * @var int
     */
    private $secondPlayerPoint = 0;

    private $lookUp = [
        0 => 'love',
        1 => 'fifteen',
        2 => 'thirty',
        3 => 'forty',
    ];

    public function score()
    {
        if ($this->isSamePoint()) {
            if ($this->firstPlayerPoint == 3) {
                return 'Deuce';
            }
            return $this->lookUp[$this->firstPlayerPoint] . '-all';
        }

        return $this->normalScore();
    }

    private function normalScore()
    {
        return $this->lookUp[$this->firstPlayerPoint] . '-' . $this->lookUp[$this->secondPlayerPoint];
    }

    private function isSamePoint()
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
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
