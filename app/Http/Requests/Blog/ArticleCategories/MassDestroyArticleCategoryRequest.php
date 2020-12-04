<?php

namespace App\Http\Requests\Blog\ArticleCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyCategoryRequest
 *
 * @property array $ids
 */
class MassDestroyArticleCategoryRequest extends FormRequest
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
            'ids'   => 'required|array',
            'ids.*' => 'exists:article_categories,id',
        ];
    }

}
