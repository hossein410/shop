<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

   public function getModel(): Product
   {
       return parent::getModel();
   }

   public function query(array $payload = []): Builder|QueryBuilder
{

    $query = QueryBuilder::for(Product::class)
        ->allowedFilters(['category_id', 'search'])
        ->with(['category', 'user']);

    if (isset($payload['category_id'])) {
        $query->where('category_id', $payload['category_id']);
    }

    if (isset($payload['search'])) {
        $query->where('name', 'like', '%' . $payload['search'] . '%');
    }

    return $query;
}

}
