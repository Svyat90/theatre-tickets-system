<?php

namespace App\Http\Requests\Spectacles;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSpectacleRequest
 *
 * @property array $name
 * @property array $author
 * @property array $producer
 * @property array $description
 * @property int $min_age
 * @property int $duration
 * @property string $start_at
 * @property boolean $active
 * @property string $image_grid
 * @property string $image_detail
 * @property array $image_gallery
 * @property array $category_ids
 */
class StoreSpectacleRequest extends FormRequest
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
            'name' => 'sometimes|array',
            'name.*' => 'string|nullable|max:128',
            'author' => 'sometimes|array',
            'author.*' => 'string|nullable|max:128',
            'producer' => 'sometimes|array',
            'producer.*' => 'string|nullable|max:128',
            'description' => 'sometimes|array',
            'description.*' => 'string|nullable',
            'min_age' => 'required|int|min:1|max:18',
            'duration' => 'required|int',
            'start_at' => 'required|string',
            'active' => 'required|bool',
            'image_grid' => 'required|string',
            'image_detail' => 'required|string',
            'image_gallery' => 'required|array',
            'image_gallery.*' => 'required|string',
            'category_ids'   => 'sometimes|array',
            'category_ids.*' => 'integer|exists:categories,id'
        ];
    }

}
