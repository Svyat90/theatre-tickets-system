<?php

namespace App\Http\Requests\Workers\WorkerCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreWorkerCategoryRequest
 *
 * @property array $name
 * @property string $slug
 */
class StoreWorkerCategoryRequest extends FormRequest
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
            'active' => 'required|bool',
        ];
    }

}
