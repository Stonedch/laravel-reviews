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
            'product_id' => 'required|exists:products,id',
            'user_id' => 'nullable|exists:users,id',
            'status_id' => 'nullable|exists:statuses,id',
            'name' => 'nullable|max:255',
            'score' => 'required|numeric|min:1|max:10',
            'positive' => 'nullable',
            'negative' => 'nullable',
        ];
    }
}
