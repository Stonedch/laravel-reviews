<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле "Name" является обязательным.',
            'email.required' => 'Поле "E-mail" является обязательным.',
        ];
    }

}
