<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:5', 'min:3', 'unique:projects'],
            'description' => ['nullable'],
            'languages' => ['required', 'max:3', 'min:1', 'unique:projects'],
            'n_stakeholders' => ['nullable'],
            'year' => ['nullable'],
            'git_link' => ['required']
        ];
    }
}