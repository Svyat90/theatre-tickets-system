<?php

namespace App\Http\Requests\Blog\ArticleCategories;

use App\Services\CategoryService;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDictionaryRequest
 * @property int $id
 * @property array $name
 * @property string $slug
 */
class UpdateArticleCategoryRequest extends FormRequest
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
            'id' => 'required|int|exists:article_categories,id',
            'name' => 'required|array',
            'name.*' => 'string|nullable|max:128',
            'active' => 'required|bool',
        ];
    }

}
