<?php

namespace App\Repositories;

use App\Models\Assessment;
use App\Repositories\Contracts\AssessmentRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AssessmentRepository implements AssessmentRepositoryInterface
{
    public function paginated(int $perPage = 15): LengthAwarePaginator
    {
        return Assessment::withCount(['questions', 'dimensions'])
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    public function findWithRelations(string $id): Assessment
    {
        $assessment = Assessment::findOrFail($id);

        $assessment->load([
            'dimensions' => fn ($q) => $q->orderBy('order_index'),
            'dimensions.interpretations',
            'dimensions.questions' => fn ($q) => $q->orderBy('order_index'),
            'dimensions.questions.answerOptions',
            'questions' => fn ($q) => $q->whereNull('dimension_id')->orderBy('order_index'),
            'recommendations',
        ]);

        return $assessment;
    }

    public function create(array $data): Assessment
    {
        return Assessment::create($data);
    }

    public function update(Assessment $assessment, array $data): Assessment
    {
        $assessment->update($data);

        return $assessment->fresh();
    }

    public function delete(Assessment $assessment): void
    {
        $assessment->delete();
    }

    public function toggle(Assessment $assessment): Assessment
    {
        $assessment->update(['is_active' => ! $assessment->is_active]);

        return $assessment->fresh();
    }
}
