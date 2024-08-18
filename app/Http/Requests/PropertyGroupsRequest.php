<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyGroupsRequest extends FormRequest
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
            'title' => ['required', 'unique:property_groups,title'],
        ];
    }

    public function messages(){
        return [
            'title.required' => 'عنوان الزامیست',
            'title.unique' => 'این عنوان قبلا در سایت ثبت شده است. عنوان دیگری انتخاب کنید',
        ];
    }
}
