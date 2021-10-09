<?php

namespace App;

class Vector
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length(): float
    {
        return sqrt(($this->x ** 2) * ($this->y ** 2));
    }

    public function isZero(): bool
    {
        return $this->length() == 0;
    }

    public function isPerpendicularTo(Vector $vector): bool
    {
        return $this->x * $vector->x + $this->y * $vector->y == 0
            and !$this->isZero() and !$vector->isZero();
    }

    public function __toString(): string
    {
        return '(' . strval($this->x) . ';' . strval($this->y) . ')';
    }
}
