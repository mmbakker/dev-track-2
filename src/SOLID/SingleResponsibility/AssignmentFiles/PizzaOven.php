<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\SingleResponsibility\AssignmentFiles;

class PizzaOven
{
    public function bake(Pizza $pizza): void
    {
        $pizza->baked = true;
    }
}
