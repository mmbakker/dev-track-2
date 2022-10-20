<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\LiskovSubstitution\AssignmentFiles;

abstract class GameEntity
{
    public function __construct(private ?int $healthPoints)
    {
    }

    public function getHealthPoints(): ?int
    {
        return $this->healthPoints;
    }

    public function setHealthPoints(int $healthPoints): void
    {
        printf("%s is going from %d to %d health points\n", $this, $this->healthPoints, $healthPoints);

        $this->healthPoints = $healthPoints;

        if ($healthPoints <= 0) {
            printf("%s is dead!  (x_x)\n", $this);
        }
    }

    public function hit(GameEntity $gameEntity, int $damage): void
    {
        $damage = max(0, $damage);

        printf("%s deals %d damage to %s\n", $this, $damage, $gameEntity);

        $gameEntity->setHealthPoints($gameEntity->getHealthPoints() - $damage);
    }

    public function speak(): void
    {
        printf("%s: I'm out to get you!\n", $this);
    }

    public function __toString(): string
    {
        return substr($this::class, strrpos($this::class, '\\') + 1);
    }
}
