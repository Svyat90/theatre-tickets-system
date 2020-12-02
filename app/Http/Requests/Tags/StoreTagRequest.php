<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCategoryRequest
 * @property array $name
 */
class StoreTagRequest extends FormRequest
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
        ];
    }

}
