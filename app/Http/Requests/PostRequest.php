<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class PostRequest extends FormRequest
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
            'title' => ['required', Rule::unique('posts')->ignore('posts'), 'max:150'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'content' => ['nullable'],
            'img' => ['nullable'],
            'slug' => ['nullable']
        ];
    }
}
