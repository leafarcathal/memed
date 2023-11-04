<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Repository\PokemonRepositoryInterface;

class PokemonRepository implements PokemonRepositoryInterface
{
    public function getDataById(int $id): array
    {
        $url = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$id}");
        return json_decode($url, true);
    }
}