<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\LiskovSubstitution\AssignmentFiles;

class NonPlayableCharacter extends GameEntity
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function setHealthPoints(int $healthPoints): void
    {
        throw new \RuntimeException('NPCs don\'t have health points.');
    }

    public function speak(): void
    {
        printf("%s: I'm on the side lines, I can't fight.\n", $this);
    }
}
