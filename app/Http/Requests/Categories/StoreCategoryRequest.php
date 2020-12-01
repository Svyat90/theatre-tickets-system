<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCategoryRequest
 * @property int $id
 * @property array $name
 * @property string $slug
 */
class StoreCategoryRequest extends FormRequest
{

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'name' => 'required|array',
            'name.*' => 'string|nullable|max:128',
            'slug' => 'required|string|max:128|unique:categories,slug',
            'active' => 'required|bool',
        ];
    }

}
