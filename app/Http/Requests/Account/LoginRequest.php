<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    /**
     * Apply message to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'O campo usuário precisa ser preenchido.',
            'username.email' => 'O usuário precisa ser um endereço de e-mail.',
            'password.required' => 'O campo senha precisa ser preenchido.',
        ];
    }
}
