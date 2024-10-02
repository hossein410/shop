<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'price'       => $this->price,
            'user_id'     => $this->whenLoaded(
                             'user', fn() => UserResource::make(
                             $this->resource->user)),
            'category_id' => $this->whenLoaded(
                             'category', fn() => CategoryResource::make(
                             $this->resource->category)),

        ];
    }
}
