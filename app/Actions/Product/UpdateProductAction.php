<?php

namespace App\Actions\Product;

use App\Enums\PermissionEnum;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProductAction
{
    use AsAction;

    public function __construct(private readonly ProductRepositoryInterface $repository)
    {
    }


    /**
     * @param Product                                          $product
     * @param array{name:string,mobile:string,email:string} $payload
     * @return Product
     */
    public function handle(Product $product, array $payload): Product
    {
        return DB::transaction(function () use ($product, $payload) {
            $product->update($payload);
            return $product;
        });
    }
}
