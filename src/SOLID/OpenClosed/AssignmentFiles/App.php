<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\OpenClosed\AssignmentFiles;

class App
{
    public static function run(): void
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';

        $text = 'Hello world!';
        $type = Message::TYPE_SUCCESS;

        $message = new Message($text, $type);

        echo "Here's the formatted message:\n";

        Printer::print($message);
    }
}

App::run();
