<?php

namespace App\Http\Requests\Front\Articles;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexSpectacleRequest
 *
 * @property int $category_id
 */
class IndexArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'sometimes|nullable|exists:article_categories,id'
        ];
    }
}
