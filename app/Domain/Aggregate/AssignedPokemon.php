<?php

declare(strict_types=1);

namespace App\Domain\Aggregate;

use App\Domain\Entity\Pokemon;
use App\Domain\Entity\User;

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