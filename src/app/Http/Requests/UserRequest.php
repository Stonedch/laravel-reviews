<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->id),
            ],
            'password'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Name" является обязательным.',
            'email.required' => 'Поле "E-mail" является обязательным.',
            'password.required' => 'Поле "Password" является обязательным.',
        ];
    }
}
