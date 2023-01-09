<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\LiskovSubstitution\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        $player = new Player(100);
        $enemy = new Enemy(100);
        $npc = new NonPlayableCharacter();

        $player->speak();
        $enemy->speak();
        $npc->speak();

        $player->hit($enemy, 50);

        $enemy->hit($player, 75);

        $player->hit($enemy, 50);

        $player->hit($npc, 10);
    }
}

App::run();
