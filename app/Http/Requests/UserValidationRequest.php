<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationRequest extends FormRequest
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
            'name' => ['required', 'string', 'alpha', 'max:255', 'min:3'],
            'age' => ['required|digits_between:10,150'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['mimes:jpg,png,jpeg', 'max:6048'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ];
    }

    public function messages()
    {
        // return [];
    }
}
