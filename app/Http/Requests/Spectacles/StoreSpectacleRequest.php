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
 * @property boolean $is_premiera
 * @property string $image_grid
 * @property string $image_detail
 * @property array $image_gallery
 * @property array $category_ids
 * @property int $schema_id
 * @property string $video_youtube_url
 * @property string $video_title
 * @property string $video_desc
 * @property string $video_link
 * @property string $video_date
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
            'is_premiera' => 'required|bool',
            'image_grid' => 'required|string',
            'image_detail' => 'required|string',
            'image_gallery' => 'required|array',
            'image_gallery.*' => 'required|string',
            'category_ids'   => 'sometimes|array',
            'category_ids.*' => 'integer|exists:categories,id',
            'schema_id' => 'required|exists:schemas,id',
            'video_youtube_url' => 'sometimes|array',
            'video_youtube_url.*' => 'string|nullable|max:256',
            'video_title' => 'sometimes|array',
            'video_title.*' => 'string|nullable|max:256',
            'video_desc' => 'sometimes|array',
            'video_desc.*' => 'string|nullable|max:256',
            'video_link' => 'sometimes|array',
            'video_link.*' => 'string|nullable|max:256',
            'video_date' => 'sometimes|nullable',
        ];
    }

}
