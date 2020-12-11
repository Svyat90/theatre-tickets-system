<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class UpdateDictionaryRequest
 *
 * @property int $id
 * @property string $name
 * @property string $title
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
class UpdateAboutRequest extends FormRequest
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
            'title' => 'required|array',
            'title.*' => 'string|nullable|max:128',
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
            'image_1' => 'required|string',
            'image_2' => 'required|string',
            'image_3' => 'required|string',
            'image_4' => 'required|string',
            'image_gallery' => 'required|array',
            'image_gallery.*' => 'required|string',
        ];
    }

}
