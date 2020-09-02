<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'products_id_foreign' => 'required|exists:products,id',
            'users_id_foreign' => 'nullable|exists:users,id',
            'statuses_id_foreign' => 'nullable|exists:statuses,id',
            'name' => 'nullable|max:255',
            'score' => 'required|numeric|min:1|max:10',
            'positive' => 'nullable',
            'negative' => 'nullable',
        ];
    }
}
