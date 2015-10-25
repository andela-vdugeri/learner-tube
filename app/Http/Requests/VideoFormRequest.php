<?php

namespace Tubr\Http\Requests;

use Tubr\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class VideoFormRequest extends Request
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
            'title' 		=> 'required|min:6',
			'url'			=> 'required|unique:videos',
			'description' 	=> 'required|max:255'
        ];
     }
}
