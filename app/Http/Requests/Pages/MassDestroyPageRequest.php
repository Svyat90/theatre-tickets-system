<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyCategoryRequest
 *
 * @property array $ids
 */
class MassDestroyPageRequest extends FormRequest
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
            'ids.*' => 'exists:pages,id',
        ];
    }

}
