<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\Pokemon\PokemonId;
use App\Domain\ValueObject\Pokemon\PokemonName;
use App\Domain\ValueObject\Pokemon\PokemonSprite;

class Pokemon
{
    public function __construct(
        public readonly PokemonId $id,
        public readonly PokemonName $name,
        public readonly PokemonSprite $sprite,
    ){
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id->value,
            'name' => $this->name->value,
            'sprite' => $this->sprite->value
        ];
    }

}