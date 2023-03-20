<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\InterfaceSegregation\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        $shapes = self::getShapes();

        foreach ($shapes as $shape) {
            printf("- %s - coordinates: (%d, %d)\n", $shape, $shape->getX(), $shape->getY());
        }
    }

    /**
     * @return array<ShapeInterface>
     */
    private static function getShapes(): array
    {
        return [
            new Circle(1, 1, 10),
            new Square(15, 15, 10),
        ];
    }
}

App::run();
