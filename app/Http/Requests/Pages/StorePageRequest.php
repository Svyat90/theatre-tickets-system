<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Services\PageService;

/**
 * Class StorePageRequest
 *
 * @property int $parent_id
 * @property int $order_top
 * @property int $order_footer
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
class StorePageRequest extends FormRequest
{

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @param PageService $pageService
     *
     * @return string[]
     */
    public function rules(PageService $pageService)
    {
        return [
            'parent_id' => 'sometimes',
            'url' => 'sometimes|nullable|string|max:256',
            'order_top' => 'sometimes|nullable|int',
            'order_footer' => 'sometimes|nullable|int',
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
            'image' => 'sometimes|string',
            'type' => 'required|' . Rule::in($pageService->getTypes())
        ];
    }

}
