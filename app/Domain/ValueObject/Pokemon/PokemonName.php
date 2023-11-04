<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\Pokemon;

class PokemonName
{
    public function __construct(
        public readonly string $value
    )
    {
        $this->validate();
    }

    private function validate(): void
    {
        if (strlen($this->value) < 3) {
            throw new \InvalidArgumentException('Nome de Pokémon Inválido');
        }
    }

}