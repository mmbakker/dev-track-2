<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\SingleResponsibility\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        echo "Welcome to my Pizza Restaurant!\n";
        echo "Let's start your order.\n\n";

        $order = new Order();

        $order->sauce = self::prompt(
            'Would you like [t]omato sauce or [b]arbecue sauce as base sauce for your pizza?',
            ['t', 'b'],
        );

        $order->cheese = self::prompt('Would you like cheese on your pizza?', ['y', 'n']);

        $pizza = Pizza::fromOrder($order);

        echo "\n";
        echo "Your pizza is ready!\n";
        echo $pizza, "\n";
    }

    private static function prompt(string $message, array $options): string
    {
        $message .= ' (' . implode('/', $options) . ') ';

        do {
            $choice = readline($message);
        } while (!$choice || (!in_array($choice, $options) && print("Invalid choice\n")));

        return $choice;
    }
}

App::run();
