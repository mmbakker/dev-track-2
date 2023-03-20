<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

interface ShapeInterface
{
    public function __toString(): string;

    public function getX(): int;

    public function getY(): int;
}
