<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

class Square implements ShapeInterface
{
    public function __construct(
        private int $x,
        private int $y,
        private int $sideLength,
    )
    {
    }

    public function __toString(): string
    {
        return 'square';
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getSideLength(): int
    {
        return $this->sideLength;
    }
}
