<?php

namespace App\Http\Requests\Workers\Worker;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class StoreWorkerRequest
 *
 * @property int $worker_category_id
 * @property boolean $active
 * @property boolean $on_home
 * @property boolean $on_top
 * @property array $name
 * @property array $title
 * @property string $image
 * @property string $text_1
 * @property string $text_2
 * @property string $text_3
 * @property string $text_4
 * @property string $text_5
 * @property Media $image_1
 * @property Media $image_2
 * @property Media $image_3
 * @property Media $image_4
 * @property array $image_gallery
 */
class StoreWorkerRequest extends FormRequest
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
            'on_top' => 'required|bool',
            'on_home' => 'required|bool',
            'name' => 'sometimes|array',
            'name.*' => 'string|nullable|max:128',
            'title' => 'sometimes|array',
            'title.*' => 'string|nullable|max:128',
            'image' => 'sometimes|string',
            'text_1' => 'required|array',
            'text_1.*' => 'string|nullable',
            'text_2' => 'required|array',
            'text_2.*' => 'string|nullable',
            'text_3' => 'required|array',
            'text_3.*' => 'string|nullable',
            'text_4' => 'required|array',
            'text_4.*' => 'string|nullable',
            'text_5' => 'required|array',
            'text_5.*' => 'string|nullable',
            'text_6' => 'required|array',
            'text_6.*' => 'string|nullable',
            'image_1' => 'sometimes|nullable|string',
            'image_2' => 'sometimes|nullable|string',
            'image_3' => 'sometimes|nullable|string',
            'image_4' => 'sometimes|nullable|string',
            'image_gallery' => 'sometimes|nullable|array',
            'image_gallery.*' => 'required|string',
        ];
    }

}
