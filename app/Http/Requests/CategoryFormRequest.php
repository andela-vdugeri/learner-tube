<?php

namespace Tubr\Http\Requests;

use Tubr\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CategoryFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories|min:1'
        ];
    }
}
