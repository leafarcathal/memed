<?php

declare(strict_types=1);

namespace App\Domain\Entity;

class AssignedPokemon
{
    public function __construct(
        public readonly User $user,
        public readonly Pokemon $pokemon
    ) {
    }

    public function toArray(): array
    {
        return [
            'user' => $this->user->toArray(),
            'pokemon' => $this->pokemon->toArray()
        ];
    }

}