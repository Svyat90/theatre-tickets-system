<?php

namespace App\Http\Requests\Workers\WorkerCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyWorkerCategoryRequest
 *
 * @property array $ids
 */
class MassDestroyWorkerCategoryRequest extends FormRequest
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
            'ids.*' => 'exists:worker_categories,id',
        ];
    }

}
