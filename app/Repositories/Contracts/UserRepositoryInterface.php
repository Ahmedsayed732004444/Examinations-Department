<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    /**
     * Search and paginate users with their completed exam session count.
     *
     * @return LengthAwarePaginator
     */
    public function searchPaginated(?string $search, int $perPage = 15);

    /**
     * Retrieve completed exam sessions for a specific user.
     *
     * @return Collection
     */
    public function getUserResults(string $userId);
}
