<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3'],
            'description' => ['required'],
            'image' => ['mimes:jpg,png,jpeg', 'max:6048'],  
            'status' => ['string'] ,     
        ];
    }
    public function messages()
    {
        // return ['title.alpha' => 'the title must be aplhabet'];
        // return ['image.mimes' => 'the image file must be jpg and png'];
    }
}
