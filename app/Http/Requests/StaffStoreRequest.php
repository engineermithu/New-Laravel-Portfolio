<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffStoreRequest extends FormRequest
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
            'first_name'    => 'required|max:50|regex:/^[a-zA-Z\s]*$/',
            'last_name'     => 'required|max:50|regex:/^[a-zA-Z\s]*$/',
            'phone'         => 'nullable|min:8',
            'date_of_birth' => 'nullable',
            'email'         => 'required|max:50|email|unique:users',
            'password'      => 'required|min:6',
//            'username'      => 'nullable|min:3',
            'gender'        => 'nullable',
            'image'         => 'nullable|mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP|max:5120',
        ];
    }
}
