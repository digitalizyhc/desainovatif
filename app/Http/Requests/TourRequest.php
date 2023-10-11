<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'        => 'required|string|max:250',
            'slug'        => 'required|string|unique:tours,slug',
            'category'    =>'required|string|max:250',
            'image'       => Rule::filepond(['required', 'image:jpg,jpeg,png', 'max:2048']),
            'gallery'     => ['nullable', 'array'],
            'gallery.*'   => Rule::filepond(['image:jpg,jpeg,png', 'max:2048']),
            'description' => 'required|string',
        ];

        if (request()->isMethod('PUT')) {
            $attr['image'] = 'nullable';
            $attr['slug']  = 'required|string|unique:tours,slug,' . request()->tour->id;
        }

        return $attr;
    }
}
