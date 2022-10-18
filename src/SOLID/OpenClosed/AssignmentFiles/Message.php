<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\OpenClosed\AssignmentFiles;

class Message
{
    public const TYPE_SUCCESS = 'success';
    public const TYPE_ERROR = 'error';

    public function __construct(
        public readonly string $text,
        public readonly string $type,
    ) {
    }
}
