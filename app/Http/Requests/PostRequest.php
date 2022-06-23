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
        //dd($this->post['title']);
        return [
            'title' => ['required', Rule::unique('posts')->ignore($this->post['title'])],
            'category_id' => ['nullable', 'exists:categories,id'],
            'content' => ['nullable'],
            'img' => ['nullable'],
            'slug' => ['nullable']
        ];
    }
}
