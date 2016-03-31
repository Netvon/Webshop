<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TagRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
//        return auth_has_role('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $tag = $this->tags;

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required|min:2|unique:tags,name',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|min:2|unique:tags,name,'.$tag->id,
                ];
            }
            default:break;
        }
    }
}
