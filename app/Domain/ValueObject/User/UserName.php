<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\User;

class UserName
{
    public function __construct(
        public readonly string $value
    ) {
    }
}
