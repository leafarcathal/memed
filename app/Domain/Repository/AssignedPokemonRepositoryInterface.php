<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Aggregate\AssignedPokemon;

interface AssignedPokemonRepositoryInterface
{
    public function generateByUserId(int $id): AssignedPokemon;
}