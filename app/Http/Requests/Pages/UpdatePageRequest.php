<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDictionaryRequest
 *
 * @property int $parent_id
 * @property int $order
 * @property boolean $on_header
 * @property boolean $on_footer
 * @property boolean $active
 * @property array $name
 * @property array $title
 * @property array $description
 * @property array $content
 * @property string $date
 * @property string $image
 */
class UpdatePageRequest extends FormRequest
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
            'parent_id' => 'sometimes|int',
            'url' => 'sometimes|nullable|string|max:256',
            'order' => 'sometimes|nullable|int',
            'on_header' => 'required|bool',
            'on_footer' => 'required|bool',
            'active' => 'required|bool',
            'name' => 'sometimes|array',
            'name.*' => 'string|nullable|max:128',
            'title' => 'sometimes|array',
            'title.*' => 'string|nullable|max:128',
            'description' => 'sometimes|array',
            'description.*' => 'string|nullable',
            'content' => 'sometimes|array',
            'content.*' => 'string|nullable',
            'date' => 'sometimes|nullable|string',
            'image' => 'sometimes|string'
        ];
    }

}
