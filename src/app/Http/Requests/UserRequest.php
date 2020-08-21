<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password'=> 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле "Name" является обязательным.',
            'email.required' => 'Поле "E-mail" является обязательным.',
            'password.required' => 'Поле "Password" является обязательным.',
        ];
    }

}
