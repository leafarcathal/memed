<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\User;

class UserEmail
{
    public function __construct(
        public readonly string $value
    ) {
        $this->validate();
    }

    private function validate(): void
    {
        if (! filter_var($this->value,FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('E-mail inválido');
        }
    }

}