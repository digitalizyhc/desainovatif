<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $attr = [
            'title'    => 'required|string|max:250',
            'slug'     => 'required|string|unique:posts,slug',
            'image'    => Rule::filepond(['required', 'image:jpg,jpeg,png', 'max:2048']),
            'category_id' =>'required',
            'content' => 'required|string',
        ];

        if (request()->isMethod('PUT')) {
            $attr['image'] = 'nullable';
            $attr['slug']  = 'required|string|unique:posts,slug,' . request()->post->id;
        }

        return $attr;
    }
}
