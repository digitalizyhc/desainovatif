<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesaRequest extends FormRequest
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
            'provinsi'      => 'required|numeric|exists:provinsi,id',
            'kabupaten'     => 'required|numeric|exists:kabupaten,id',
            'kecamatan'     => 'required|numeric|exists:kecamatan,id',
            'name'          => 'required|string|max:255',
            'domain'        => 'required|string|max:255|unique:tenants,name',
            'admin_desa'    => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:5',
        ];

        if (request()->isMethod('PUT')) {
            $attr['password'] = 'nullable|string|min:5';
            $attr['email']    = 'required|string|email|max:255|unique:users,email,' . request()->desa->admin_desa_id;
            $attr['domain']   = 'required|string|max:255|unique:tenants,name,' . request()->desa->user->tenant->id;
        }

        return $attr;
    }
}
