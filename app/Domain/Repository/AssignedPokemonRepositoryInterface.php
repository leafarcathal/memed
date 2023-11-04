<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\AssignedPokemon;

interface AssignedPokemonRepositoryInterface
{
    public function generateByUserId(int $id): AssignedPokemon;
}