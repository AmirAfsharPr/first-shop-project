<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image' => ['required','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'subtitle' => ['required','string'],
            'title' => ['required','string'],
            'text' => ['required','string'],
            'link' => ['required'],
        ];
    }
}
