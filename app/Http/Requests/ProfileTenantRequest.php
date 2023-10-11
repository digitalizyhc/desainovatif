<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileTenantRequest extends FormRequest
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
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
            'avatar'   => Rule::filepond(['nullable', 'image', 'max:1000']),
        ];

        if (request()->isMethod('PUT')) {
            $attr['password'] = 'nullable|string|min:5';
            $attr['email'] = 'required|string|email|max:255|unique:users,email,' . request()->user()->id;
        }

        return $attr;
    }
}
