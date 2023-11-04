<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\Shared;

class IntValueObject
{
    public function __construct(
        public readonly int $value
    ) {
        $this->validate();
    }

    private function validate(): void
    {
        if ($this->value <= 0) {
            throw new \InvalidArgumentException('ID precisa ser maior que 0');
        }
    }

}