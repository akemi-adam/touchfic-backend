<?php

namespace App\Http\Requests\Post;

use App\Traits\ValidationFailed;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PostUpdateRequest extends FormRequest
{
    use ValidationFailed;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'content' => [ 'min:10', 'string' ],
        ];
    }

    /**
     * Define validation error messages
     * 
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'content.required' => 'The content is required',
            'content.min' => 'The content must be a minimum of 10 characters',
            'content.string' => 'The content must be a text'
        ];
    }
}
