<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\User\UserEmail;
use App\Domain\ValueObject\User\UserId;
use App\Domain\ValueObject\User\UserName;

class User
{
    public function __construct(
        public readonly UserId $id,
        public readonly UserName $name,
        public readonly UserEmail $email,
    ) {
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id->value,
            'name' => $this->name->value,
            'email' => $this->email->value
        ];
    }

}