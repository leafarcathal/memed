<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\Pokemon;

class PokemonSprite
{
    public function __construct(
        public readonly string $value
    )
    {
        $this->validate();
    }

    private function validate(): void
    {
        if (! filter_var($this->value, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException('URL de sprite inválida');
        }
    }
}