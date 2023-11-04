<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\Pokemon;

use App\Domain\ValueObject\Shared\IntValueObject;
use Exception;

class PokemonId extends IntValueObject
{
    /**
     * @throws Exception
     */
    public static function generate(): self
    {
        return new self(random_int(1, 1010));
    }

}
