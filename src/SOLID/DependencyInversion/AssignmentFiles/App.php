<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\DependencyInversion\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        $computer = new Computer();
        $computer->
    }
}

App::run();
