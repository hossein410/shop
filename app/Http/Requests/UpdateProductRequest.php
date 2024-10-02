<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_id'     => ['nullable','integer', 'exists::users,id'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price'       => ['required'],
        ];
    }
}
