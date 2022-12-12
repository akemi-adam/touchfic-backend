<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ValidationFailed;
use Auth;

class LoginRequest extends FormRequest
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
            'email' => [ 'required', 'email' ],
            'password' => [ 'required' ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'The email is required',
            'email.email' => 'The email must be of the type email',
            'password.required' => 'The password is required',
        ];
    }
}
