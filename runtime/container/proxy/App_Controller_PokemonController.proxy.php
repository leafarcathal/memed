<?php

namespace App\Controller;

use App\Domain\Entity\AssignedPokemon;
use App\Domain\Entity\Pokemon;
use App\Domain\Entity\User;
use App\Domain\ValueObject\Pokemon\PokemonId;
use App\Domain\ValueObject\Pokemon\PokemonName;
use App\Domain\ValueObject\Pokemon\PokemonSprite;
use App\Domain\ValueObject\User\UserEmail;
use App\Domain\ValueObject\User\UserName;
use App\Domain\ValueObject\User\UserId;
class PokemonController extends AbstractController
{
    use \Hyperf\Di\Aop\ProxyTrait;
    use \Hyperf\Di\Aop\PropertyHandlerTrait;
    function __construct()
    {
        if (method_exists(parent::class, '__construct')) {
            parent::__construct(...func_get_args());
        }
        $this->__handlePropertyHandler(__CLASS__);
    }
    public function index()
    {
        $assigned = new AssignedPokemon(new User(new UserId('3'), new UserName('Rafa'), new UserEmail('rafa@gmail.com')), new Pokemon(PokemonId::generate(), new PokemonName('aaaa'), new PokemonSprite('http://gmail.com')));
        return $assigned->toArray();
    }
}