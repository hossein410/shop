<?php

namespace App\Actions\Category;

use App\Actions\Translation\SetTranslationAction;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreCategoryAction
{
    use AsAction;

    private readonly Category $category;

    public function __construct(private readonly CategoryRepositoryInterface $repository, Category $category)
    {
        $this->category = $category;
    }

    public function handle(array $payload): Category|null
    {
        return DB::transaction(function () use ($payload) {
            if (!empty($payload['parent_id'])) {
                $categoryTyp = $this->repository->find($payload['parent_id']);
                if ($payload['type'] == $categoryTyp->type) {
                    $model = $this->repository->store($payload);

                    return $model;
                }
            } else {
                $model = $this->repository->store($payload);
           
                return $model;
            }
            return null;
        });
    }
}
