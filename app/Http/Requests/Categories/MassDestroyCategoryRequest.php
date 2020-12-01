<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyCategoryRequest
 *
 * @property array $ids
 */
class MassDestroyCategoryRequest extends FormRequest
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
            'ids.*' => 'exists:categories,id',
        ];
    }

}
