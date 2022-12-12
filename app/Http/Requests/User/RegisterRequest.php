<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ValidationFailed;
use Auth;

class RegisterRequest extends FormRequest
{
    use ValidationFailed;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [ 'required' ],
            'email' => [ 'required', 'email', 'unique:users,email' ],
            'password' => [ 'required' ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'email.required' => 'The email is required',
            'email.email' => 'The email must be of the type email',
            'email.unique:users,email' => 'There is already a user registered with this email address',
            'password.required' => 'The password is required',
        ];
    }
}
