<?php

namespace App\Http\Requests\Blog\Articles;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyArticleRequest
 *
 * @property array $ids
 */
class MassDestroyArticleRequest extends FormRequest
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
            'ids.*' => 'exists:articles,id',
        ];
    }

}
