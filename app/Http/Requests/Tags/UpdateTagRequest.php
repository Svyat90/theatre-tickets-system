<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDictionaryRequest
 * @property int $id
 * @property array $name
 */
class UpdateTagRequest extends FormRequest
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
            'id' => 'required|int|exists:tags,id',
            'name' => 'required|array',
            'name.*' => 'string|nullable|max:128'
        ];
    }

}
