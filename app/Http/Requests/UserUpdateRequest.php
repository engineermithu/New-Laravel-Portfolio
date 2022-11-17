<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Request;
class UserUpdateRequest extends FormRequest
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
            'first_name' => 'required|max:50|regex:/^[a-zA-Z\s.]*$/',
            'last_name'  => 'required|max:50|regex:/^[a-zA-Z\s]*$/',
            'email'      => 'required|max:50|email|',
            'phone'      => 'required|min:8',
            'image'      => 'nullable|mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP|max:5120',
        ];
    }
}
