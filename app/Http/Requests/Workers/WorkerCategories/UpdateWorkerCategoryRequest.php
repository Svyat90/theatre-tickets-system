<?php

namespace App\Http\Requests\Workers\WorkerCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateWorkerCategoryRequest
 *
 * @property int $id
 * @property array $name
 */
class UpdateWorkerCategoryRequest extends FormRequest
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
            'id' => 'required|int|exists:worker_categories,id',
            'name' => 'required|array',
            'name.*' => 'string|nullable|max:128',
            'active' => 'required|bool',
        ];
    }

}
