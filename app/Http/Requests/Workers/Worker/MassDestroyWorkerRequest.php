<?php

namespace App\Http\Requests\Workers\Worker;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MassDestroyWorkerRequest
 *
 * @property array $ids
 */
class MassDestroyWorkerRequest extends FormRequest
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
            'ids.*' => 'exists:workers,id',
        ];
    }

}
