<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth_has_role('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'price' => 'required|numeric',
            'description_long' => 'required',
            'description_short' => 'required',
            'spec.*.name' => 'required',
            'spec.*.value' => 'required',
        ];
    }
}
