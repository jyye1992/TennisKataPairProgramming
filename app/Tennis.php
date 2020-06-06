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

    private $lookUp = [
        0 => 'love',
        1 => 'fifteen',
        2 => 'thirty',
        3 => 'forty',
    ];

    public function score()
    {
//        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
//            return $this->lookUp[$this->firstPlayerPoint] . '-all';
//        }

        if ($this->firstPlayerPoint == 1 && $this->secondPlayerPoint == 1) {
            return 'fifteen-all';
        } elseif ($this->firstPlayerPoint == 2 && $this->secondPlayerPoint == 2) {
            return 'thirty-all';
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookUp[$this->firstPlayerPoint] . '-love';
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
