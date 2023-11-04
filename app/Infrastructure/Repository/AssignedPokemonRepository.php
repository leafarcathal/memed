<?php

namespace App\Infrastructure\Repository;

use App\Domain\Entity\AssignedPokemon;
use App\Domain\Entity\Pokemon;
use App\Domain\Entity\User;
use App\Domain\Repository\AssignedPokemonRepositoryInterface;
use App\Domain\Repository\PokemonRepositoryInterface;
use App\Domain\Repository\UserRepositoryInterface;
use App\Domain\ValueObject\Pokemon\PokemonId;
use App\Domain\ValueObject\Pokemon\PokemonName;
use App\Domain\ValueObject\Pokemon\PokemonSprite;
use App\Domain\ValueObject\User\UserEmail;
use App\Domain\ValueObject\User\UserId;
use App\Domain\ValueObject\User\UserName;
use Hyperf\Coroutine\Parallel;

class AssignedPokemonRepository implements AssignedPokemonRepositoryInterface
{
    public function __construct(
        public readonly UserRepositoryInterface $userRepository,
        public readonly PokemonRepositoryInterface $pokemonRepository,
        public readonly Parallel $coroutine
    )
    {

    }
    public function generateByUserId(int $id): AssignedPokemon
    {
        $this->coroutine->add(
            function () use ($id) {
                return $this->userRepository->getDataById($id);
            }, 'userData'
        );

        $this->coroutine->add(
            function () use ($id) {
                return $this->userRepository->getEmailById($id);
            }, 'emailData'
        );

        $pokemonId = PokemonId::generate();

        $this->coroutine->add(
            function () use ($pokemonId) {
                return $this->pokemonRepository->getDataById($pokemonId->value);
            }, 'pokemonData'
        );

        $response = $this->coroutine->wait();

        $user = new User(
            new UserId($id),
            new UserName($response['userData']['name']),
            new UserEmail($response['emailData']['email'])
        );

        $pokemon = new Pokemon(
            $pokemonId,
            new PokemonName($response['pokemonData']['name']),
            new PokemonSprite($response['pokemonData']['sprites']['front_default'])
        );

        return new AssignedPokemon(
            $user,
            $pokemon
        );
    }
}