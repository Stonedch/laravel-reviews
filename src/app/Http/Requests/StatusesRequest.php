<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StatusesRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => [
                'required',
                'max:255',
                Rule::unique('statuses', 'name')->ignore($this->id)
            ],
            'slug' => [
                'required',
                'max:255',
                Rule::unique('statuses', 'slug')->ignore($this->id),
            ],
            'color_bg' => 'nullable',
            'color_fg' => 'nullable',
        ];
    }

}
