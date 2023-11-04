<?php

declare(strict_types=1);

namespace App\Domain\Repository;

interface PokemonRepositoryInterface
{
    public function getDataById(int $id): array;
}
