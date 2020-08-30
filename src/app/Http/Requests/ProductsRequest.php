<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductsRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => [
                'required',
                'max:255',
                Rule::unique('products', 'name')->ignore($this->id)
            ],
            'slug' => [
                'max:255',
                Rule::unique('products', 'slug')->ignore($this->id),
            ],
            'picture' => 'nullable',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ];
    }

}
