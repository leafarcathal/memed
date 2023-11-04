<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    \App\Domain\Repository\AssignedPokemonRepositoryInterface::class => \App\Infrastructure\Repository\AssignedPokemonRepository::class,
    \App\Domain\Repository\UserRepositoryInterface::class => \App\Infrastructure\Repository\UserRepository::class,
    \App\Domain\Repository\PokemonRepositoryInterface::class => \App\Infrastructure\Repository\PokemonRepository::class,
];
