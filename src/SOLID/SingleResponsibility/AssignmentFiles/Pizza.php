<?php

declare(strict_types=1);

namespace Nep\DevTrack\SOLID\SingleResponsibility\AssignmentFiles;

class Pizza
{
    public ?string $sauce = null;
    public bool $cheese = false;

    public static function fromOrder(Order $order): self
    {
        $pizza = new self();
        $pizza->sauce = $order->sauce === 't' ? 'tomato sauce' : 'barbecue sauce';
        $pizza->cheese = $order->cheese === 'y';

        return $pizza;
    }

    public function __toString(): string
    {
        return sprintf(
            'Pizza with %s, and %s cheese',
            $this->sauce,
            $this->cheese ? 'with' : 'without',
        );
    }
}
