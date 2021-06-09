<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormLogin extends FormRequest
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
            'email' => 'required',
            'password' => 'required|min:5|max:20'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'دادا ایمیل رو نزدی ',
            'password.required' => 'دادا پسورد رو نزدی ',
            'password.min' => 'دادا پسورد کمتر از 5 نباید باشه ',
            'password.max' => 'دادا پسورد بیشتر از 20 نباید باشه ',
        ];
    }
}
