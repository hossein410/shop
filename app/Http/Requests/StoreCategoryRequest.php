<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title'                  => 'required|string|max:255',
            'parent_id'              => ['nullable', 'exists:categories'],
            'type'                   => ['required', 'string', 'max:255'],
            'published'              => ['required'],

        ];
    }
}
