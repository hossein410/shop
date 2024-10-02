<?php

namespace App\Actions\Product;

use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteProductAction
{
    use AsAction;

    public function __construct(public readonly ProductRepositoryInterface $repository)
    {
    }

    public function handle(Product $product): bool
    {
        return DB::transaction(function () use ($product) {
            return $this->repository->delete($product);
        });
    }
}
