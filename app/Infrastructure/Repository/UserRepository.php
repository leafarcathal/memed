<?php

namespace App\Infrastructure\Repository;

use App\Domain\Repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function getDataById(int $id): array
    {
        $url = file_get_contents("https://62a60a78b9b74f766a431500.mockapi.io/users/{$id}");
        return json_decode($url, true);
    }

    public function getEmailById(int $id): array
    {
        $url = file_get_contents("https://62a60a78b9b74f766a431500.mockapi.io/emails/{$id}");
        return json_decode($url, true);
    }
}