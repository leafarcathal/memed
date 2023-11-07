<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Aggregate\AssignedPokemon;
use App\Domain\Repository\AssignedPokemonRepositoryInterface;

class AssignedPokemonService
{
    public function __construct(
        public readonly AssignedPokemonRepositoryInterface $repository
    )
    {

    }

    public function generateById(int $id): AssignedPokemon
    {
        return $this->repository->generateByUserId($id);
    }

}