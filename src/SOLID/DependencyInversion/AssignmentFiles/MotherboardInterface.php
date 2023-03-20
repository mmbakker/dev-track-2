<?php

namespace Nep\DevTrack\SOLID\DependencyInversion\AssignmentFiles;

interface MotherboardInterface
{
    public function addProcessor(ProcessorInterface $processor): void;

    public function addMemory(MemoryInterface $memory): void;
}
