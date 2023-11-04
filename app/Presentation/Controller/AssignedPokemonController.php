<?php

declare(strict_types=1);

namespace App\Presentation\Controller;

use App\Application\AssignedPokemonService;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

class AssignedPokemonController
{
    public function __construct(
        public readonly AssignedPokemonService $service
    )
    {
        
    }
    public function index(
        RequestInterface $request,
        ResponseInterface $response,
        int $id
    ): PsrResponseInterface
    {
        $assignedPokemon = $this->service->generateById($id);
        return $response->json($assignedPokemon->toArray());
    }
}