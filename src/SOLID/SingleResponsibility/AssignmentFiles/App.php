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


        $order = new Order();

        $order->sauce = readline('Do you want [t]omato sauce or [b]arbecue sauce as base sauce for your pizza? (t/b) ');

        if (!in_array($order->sauce, ['t', 'b'])) {
            echo "Invalid input\n";
            exit;
        }

        $order->cheese = readline('Do you want cheese on your pizza? (y/n) ');

        if (!in_array($order->cheese, ['y', 'n'])) {
            echo "Invalid input\n";
            exit;
        }

        $pizza = new Pizza();
        $pizza->sauce = ($order->sauce === 't' ? 'tomato sauce' : 'barbecue sauce');
        $pizza->cheese = ($order->cheese === 'y');

        $pizzaName = ucfirst($pizza->sauce) . ', ' . ($pizza->cheese ? 'with' : 'no') . ' cheese';

        echo "Your pizza, which we called \"{$pizzaName}\", is ready!\n";
        echo "\n";
    }
}

App::run();
