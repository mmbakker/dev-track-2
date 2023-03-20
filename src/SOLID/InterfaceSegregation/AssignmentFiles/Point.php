<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

class Point implements ShapeInterface
{
    public function __construct(
        private int $x,
        private int $y,
    )
    {
    }

    public function __toString(): string
    {
        return 'point';
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}
