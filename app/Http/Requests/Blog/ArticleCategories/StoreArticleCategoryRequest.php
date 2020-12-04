<?php

namespace App\Http\Requests\Blog\ArticleCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCategoryRequest
 * @property array $name
 * @property string $slug
 */
class StoreArticleCategoryRequest extends FormRequest
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
            'active' => 'required|bool',
        ];
    }

}
