<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\OpenClosed\AssignmentFiles;

class Printer
{
    public static function print(Message $message): void
    {
        $formattedText = match ($message->type) {
            Message::TYPE_SUCCESS => "\e[1;32m" . $message->text . "\e[0m",
            Message::TYPE_ERROR => "\e[1;31m" . $message->text . "\e[0m",
            default => throw new \OutOfBoundsException('Invalid message type'),
        };

        echo $formattedText, "\n";
    }
}
