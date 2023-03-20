<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

class Line implements ShapeInterface
{
    // Purposefully taking the easy route here.
    public const DIRECTION_UP = 'up';
    public const DIRECTION_RIGHT = 'right';
    public const DIRECTION_DOWN = 'down';
    public const DIRECTION_LEFT = 'left';

    public function __construct(
        private int $x,
        private int $y,
        private int $length,
        private string $direction,
    )
    {
    }

    public function __toString(): string
    {
        return 'line';
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

}
