<?php

namespace App\Http\Requests\Workers\Worker;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateWorkerRequest
 *
 * @property int $worker_category_id
 * @property boolean $active
 * @property boolean $on_home
 * @property boolean $on_top
 * @property array $name
 * @property array $title
 * @property string $image
 */
class UpdateWorkerRequest extends FormRequest
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
            'worker_category_id' => 'sometimes|nullable|int|exists:worker_categories,id',
            'active' => 'required|bool',
            'on_home' => 'required|bool',
            'on_top' => 'required|bool',
            'name' => 'sometimes|array',
            'name.*' => 'string|nullable|max:128',
            'title' => 'sometimes|array',
            'title.*' => 'string|nullable|max:128',
            'image' => 'sometimes|string'
        ];
    }

}
