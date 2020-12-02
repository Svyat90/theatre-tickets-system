<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyCategoryRequest
 *
 * @property array $ids
 */
class MassDestroyTagRequest extends FormRequest
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
            'ids.*' => 'exists:tags,id',
        ];
    }

}
