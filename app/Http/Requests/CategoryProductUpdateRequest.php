<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductUpdateRequest extends FormRequest
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
            'parent_id'     => ['required', 'exists:category_products,id'],
            'title'         => ['string', 'min:2', 'max:128'],
            'slug'          => ['string', 'max:128', 'unique:category_products,slug'],
            'description'   => ['string', 'max:255'],
        ];
    }
}
