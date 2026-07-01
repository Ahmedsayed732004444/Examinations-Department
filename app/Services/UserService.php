<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    ) {}

    public function searchPaginated(?string $search, int $perPage = 15)
    {
        return $this->userRepository->searchPaginated($search, $perPage);
    }

    public function getUserResults(string $userId)
    {
        return $this->userRepository->getUserResults($userId);
    }
}
