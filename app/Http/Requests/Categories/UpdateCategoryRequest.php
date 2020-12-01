<?php

namespace App\Http\Requests\Categories;

use App\Services\CategoryService;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDictionaryRequest
 * @property int $id
 * @property array $name
 * @property string $slug
 */
class UpdateCategoryRequest extends FormRequest
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
            'id' => 'required|int|exists:categories,id',
            'name' => 'required|array',
            'name.*' => 'string|nullable|max:128',
            'slug' => 'required|string|max:128|unique:categories,slug,' . $this->id,
            'active' => 'required|bool',
        ];
    }

}
