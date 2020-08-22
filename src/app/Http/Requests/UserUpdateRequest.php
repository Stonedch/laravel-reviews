<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->id)
            ],
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле "Name" является обязательным.',
            'email.required' => 'Поле "E-mail" является обязательным.',
        ];
    }

}
