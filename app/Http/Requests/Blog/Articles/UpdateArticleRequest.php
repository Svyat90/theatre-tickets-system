<?php

namespace App\Http\Requests\Blog\Articles;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateArticleRequest
 *
 * @property int $article_category_id
 * @property string $video_url
 * @property boolean $active
 * @property boolean $on_header
 * @property boolean $on_footer
 * @property array $name
 * @property array $title
 * @property array $content
 * @property string $date
 * @property string $image
 */
class UpdateArticleRequest extends FormRequest
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
            'article_category_id' => 'sometimes|nullable|int|exists:article_categories,id',
            'video_url' => 'sometimes|nullable|string|max:256',
            'active' => 'required|bool',
            'on_header' => 'required|bool',
            'on_footer' => 'required|bool',
            'name' => 'sometimes|array',
            'name.*' => 'string|nullable|max:128',
            'title' => 'sometimes|array',
            'title.*' => 'string|nullable|max:128',
            'content' => 'sometimes|array',
            'content.*' => 'string|nullable',
            'date' => 'sometimes|nullable|string',
            'image' => 'sometimes|string'
        ];
    }

}
