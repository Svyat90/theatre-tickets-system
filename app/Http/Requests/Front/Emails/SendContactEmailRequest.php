<?php

namespace App\Http\Requests\Front\Emails;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SendContactEmailRequest
 *
 * @property string $email
 * @property string $name
 * @property string $first_name
 * @property string $phone
 * @property string $message
 */
class SendContactEmailRequest extends FormRequest
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
            'email'  => 'required|email',
            'name'  => 'required|string',
            'first_name'  => 'required|string',
            'phone'  => 'required|string',
            'message'  => 'required|string',
        ];
    }
}
