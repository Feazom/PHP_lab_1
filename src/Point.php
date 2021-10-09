<?php

namespace App;

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x,float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move(float $xDiff,float $yDiff)
    {
        $this->x += $xDiff;
        $this->y += $yDiff;
    }

    public function __toString(): string
    {
        return '[' . strval($this->x) . ';' . strval($this->y) . ']';
    }
}
