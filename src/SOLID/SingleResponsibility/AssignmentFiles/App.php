<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\SingleResponsibility\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        echo "Welcome to the Pizza Maker!\n";
        echo "Let's start your order.\n";

        $pizza = new Pizza();

        $response = readline('Do you want [t]omato sauce or [b]arbecue sauce as base sauce for your pizza? ');
        if ($response === 't') {
            $pizza->sauce = 'tomato sauce';
        } elseif ($response === 'b') {
            $pizza->sauce = 'barbecue sauce';
        } else {
            echo "Invalid input\n";
            exit;
        }

        $response = readline('Do you want cheese on your pizza? (y/n) ');

        if ($response === 'y') {
            $pizza->cheese = true;
        } elseif ($response === 'n') {
            $pizza->cheese = false;
        } else {
            echo "Invalid input\n";
            exit;
        }

        $oven = new PizzaOven();
        $oven->bake($pizza);

        echo "Your pizza with {$pizza->sauce} and ", $pizza->cheese ? 'with' : 'without', " cheese is ready!\n";
        echo "\n";
    }
}

App::run();
