<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

class Circle implements ShapeInterface
{
    public function __construct(
        private int $x,
        private int $y,
        private int $diameter,
    ) {
    }

    public function __toString(): string
    {
        return 'circle';
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getDiameter(): int
    {
        return $this->diameter;
    }

    public function getRadius(): float
    {
        return $this->diameter / 2;
    }
}
