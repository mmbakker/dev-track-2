<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\DependencyInversion\AssignmentFiles;

class Computer
{
    public function __construct(
        private ProcessorInterface $processor,
        private MemoryInterface $memory,
        private MotherboardInterface
    )
    {
    }
}
