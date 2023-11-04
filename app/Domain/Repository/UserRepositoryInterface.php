<?php

declare(strict_types=1);

namespace App\Domain\Repository;

interface UserRepositoryInterface
{
    public function getDataById(int $id): array;
    public function getEmailById(int $id): array;
}
