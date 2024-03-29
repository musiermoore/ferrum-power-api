<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class OrderSearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => ['max:64', 'regex:/^[a-zA-ZА-ЯЁа-яё \S]+$/'],
            'phone' => ['max:32', 'regex:/^[0-9()-+ \S]*$/'],
        ];
    }
}
