<?php

namespace App\Http\Requests\Front\Cart;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'first_name' => 'required|string|max:128',
            'last_name' => 'required|string|max:128',
            'phone' => 'required|string',
            'email' => 'required|email'
        ];
    }

}
