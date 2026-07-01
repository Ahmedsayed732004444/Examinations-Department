<?php

namespace App\Repositories;

use App\Models\Recommendation;
use App\Repositories\Contracts\RecommendationRepositoryInterface;
use Illuminate\Support\Collection;

class RecommendationRepository implements RecommendationRepositoryInterface
{
    public function allGrouped(): Collection
    {
        /*
         * JOIN recommendations with assessments to retrieve assessment title
         * alongside each recommendation in a single query.
         */
        return Recommendation::with('assessment')
            ->orderBy('assessment_id')
            ->get()
            ->groupBy('assessment_id');
    }

    public function upsert(array $data): Recommendation
    {
        /** @var Recommendation $rec */
        $rec = Recommendation::updateOrCreate(
            [
                'assessment_id' => $data['assessment_id'],
                'level' => $data['level'],
            ],
            $data
        );

        return $rec;
    }

    public function delete(Recommendation $recommendation): void
    {
        $recommendation->delete();
    }
}
